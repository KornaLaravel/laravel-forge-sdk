<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Laravel\Forge\Exceptions\FailedActionException;
use Laravel\Forge\Exceptions\ForbiddenException;
use Laravel\Forge\Exceptions\NotFoundException;
use Laravel\Forge\Exceptions\RateLimitExceededException;
use Laravel\Forge\Exceptions\TimeoutException;
use Laravel\Forge\Exceptions\ValidationException;
use Laravel\Forge\Forge;
use Laravel\Forge\MakesHttpRequests;
use Mockery;
use PHPUnit\Framework\TestCase;

class ForgeSDKTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function test_making_basic_requests()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(200, [], '{"recipes": [{"key": "value"}]}')
        );

        $this->assertCount(1, $forge->recipes());
    }

    public function test_update_site()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('PUT', 'servers/123/sites/456', [
            'json' => ['aliases' => ['foo.com']],
        ])->andReturn(
            new Response(200, [], '{"site": {"aliases": ["foo.com"]}}')
        );

        $this->assertSame(['foo.com'], $forge->updateSite('123', '456', [
            'aliases' => ['foo.com'],
        ])->aliases);
    }

    public function test_handling_validation_errors()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(422, [], '{"name": ["The name is required."]}')
        );

        try {
            $forge->recipes();
        } catch (ValidationException $e) {
        }

        $this->assertEquals(['name' => ['The name is required.']], $e->errors());
    }

    public function test_handling_404_errors()
    {
        $this->expectException(NotFoundException::class);

        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(404)
        );

        $forge->recipes();
    }

    public function test_handling_forbidden_requests(): void
    {
        $this->expectException(ForbiddenException::class);

        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(403)
        );

        $forge->recipes();
    }

    public function test_handling_failed_action_errors()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(400, [], 'Error!')
        );

        try {
            $forge->recipes();
        } catch (FailedActionException $e) {
            $this->assertSame('Error!', $e->getMessage());
        }
    }

    public function test_retry_handles_false_result_from_closure()
    {
        $requestMaker = new class
        {
            use MakesHttpRequests;
        };

        try {
            $requestMaker->retry(0, function () {
                return false;
            }, 0);
            $this->fail();
        } catch (TimeoutException $e) {
            $this->assertSame([], $e->output());
        }
    }

    public function test_retry_handles_null_result_from_closure()
    {
        $requestMaker = new class
        {
            use MakesHttpRequests;
        };

        try {
            $requestMaker->retry(0, function () {
                return null;
            }, 0);
            $this->fail();
        } catch (TimeoutException $e) {
            $this->assertSame([], $e->output());
        }
    }

    public function test_retry_handles_falsey_string_result_from_closure()
    {
        $requestMaker = new class
        {
            use MakesHttpRequests;
        };

        try {
            $requestMaker->retry(0, function () {
                return '';
            }, 0);
            $this->fail();
        } catch (TimeoutException $e) {
            $this->assertSame([''], $e->output());
        }
    }

    public function test_retry_handles_falsey_numer_result_from_closure()
    {
        $requestMaker = new class
        {
            use MakesHttpRequests;
        };

        try {
            $requestMaker->retry(0, function () {
                return 0;
            }, 0);
            $this->fail();
        } catch (TimeoutException $e) {
            $this->assertSame([0], $e->output());
        }
    }

    public function test_retry_handles_falsey_array_result_from_closure()
    {
        $requestMaker = new class
        {
            use MakesHttpRequests;
        };

        try {
            $requestMaker->retry(0, function () {
                return [];
            }, 0);
            $this->fail();
        } catch (TimeoutException $e) {
            $this->assertSame([], $e->output());
        }
    }

    public function test_rate_limit_exceeded_with_header_set()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $timestamp = strtotime(date('Y-m-d H:i:s'));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(429, [
                'x-ratelimit-reset' => $timestamp,
            ], 'Too Many Attempts.')
        );

        try {
            $forge->recipes();
        } catch (RateLimitExceededException $e) {
            $this->assertSame($timestamp, $e->rateLimitResetsAt);
        }
    }

    public function test_rate_limit_exceeded_with_header_not_available()
    {
        $forge = new Forge('123', $http = Mockery::mock(Client::class));

        $http->shouldReceive('request')->once()->with('GET', 'recipes', [])->andReturn(
            new Response(429, [], 'Too Many Attempts.')
        );

        try {
            $forge->recipes();
        } catch (RateLimitExceededException $e) {
            $this->assertNull($e->rateLimitResetsAt);
        }
    }
}
