# Release Notes

## [Unreleased](https://github.com/laravel/forge-sdk/compare/v3.18.0...3.x)

## [v3.18.0](https://github.com/laravel/forge-sdk/compare/v3.17.0...v3.18.0) - 2024-09-30

### What's Changed

* Set a User-Agent string by [@jbrooksuk](https://github.com/jbrooksuk) in https://github.com/laravel/forge-sdk/pull/184

## [v3.17.0](https://github.com/laravel/forge-sdk/compare/v3.16.0...v3.17.0) - 2024-09-03

* [3.x] Add directory property to Daemon resource by [@princejohnsantillan](https://github.com/princejohnsantillan) in https://github.com/laravel/forge-sdk/pull/182

## [v3.16.0](https://github.com/laravel/forge-sdk/compare/v3.15.0...v3.16.0) - 2024-07-25

* Add deploy-key methods by [@RobertBoes](https://github.com/RobertBoes) in https://github.com/laravel/forge-sdk/pull/180

## [v3.15.0](https://github.com/laravel/forge-sdk/compare/v3.14.3...v3.15.0) - 2024-06-27

* [3.x] Add Forge facade for Laravel integration by [@stevebauman](https://github.com/stevebauman) in https://github.com/laravel/forge-sdk/pull/177

## [v3.14.3](https://github.com/laravel/forge-sdk/compare/v3.14.2...v3.14.3) - 2024-01-23

* Preserve Initial Server Credentials During Creation Wait by [@dimger](https://github.com/dimger) in https://github.com/laravel/forge-sdk/pull/174

## [v3.14.2](https://github.com/laravel/forge-sdk/compare/v3.14.1...v3.14.2) - 2023-12-22

* Add additional database services by [@jbrooksuk](https://github.com/jbrooksuk) in https://github.com/laravel/forge-sdk/pull/173

## [v3.14.1](https://github.com/laravel/forge-sdk/compare/v3.14.0...v3.14.1) - 2023-12-15

* [3.x] Adds L11 support by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/forge-sdk/pull/171
* Add PHP 8.3 to installable service constants by [@haugen86](https://github.com/haugen86) in https://github.com/laravel/forge-sdk/pull/172

## [v3.14.0](https://github.com/laravel/forge-sdk/compare/v3.13.6...v3.14.0) - 2023-09-25

- Allow setting of auto_source in deployment scripts by [@jbrooksuk](https://github.com/jbrooksuk) in https://github.com/laravel/forge-sdk/pull/167

## [v3.13.6](https://github.com/laravel/forge-sdk/compare/v3.13.5...v3.13.6) - 2023-07-07

- Fix for some functions using a hard coded timeout of 30 by [@lhelwingkh](https://github.com/lhelwingkh) in https://github.com/laravel/forge-sdk/pull/157

## [v3.13.5](https://github.com/laravel/forge-sdk/compare/v3.13.4...v3.13.5) - 2023-05-16

- Adds missing php version by @nunomaduro in https://github.com/laravel/forge-sdk/pull/162

## [v3.13.4](https://github.com/laravel/forge-sdk/compare/v3.13.3...v3.13.4) - 2023-04-26

- Add PHP 8.2 to installable service constants by @AntonCooper in https://github.com/laravel/forge-sdk/pull/160
- Dynamic properties on Resource class by @driesvints in https://github.com/laravel/forge-sdk/pull/159

## [v3.13.3](https://github.com/laravel/forge-sdk/compare/v3.13.2...v3.13.3) - 2022-11-09

### Fixed

- Add username to ssh key by @barryvdh in https://github.com/laravel/forge-sdk/pull/151

## [v3.13.2](https://github.com/laravel/forge-sdk/compare/v3.13.1...v3.13.2) - 2022-11-01

### Changed

- Add Exception for Exceeding Forge API Rate Limit by @DexterHarrison in https://github.com/laravel/forge-sdk/pull/149

## [v3.13.1](https://github.com/laravel/forge-sdk/compare/v3.13.0...v3.13.1) - 2022-05-31

### Changed

- Add updated server provider keys by @jbrooksuk in https://github.com/laravel/forge-sdk/pull/137

### Fixed

- Ensure timout exception always recieves an array by @timacdonald in https://github.com/laravel/forge-sdk/pull/143

## [v3.13.0](https://github.com/laravel/forge-sdk/compare/v3.12.0...v3.13.0) - 2022-03-08

### Added

- Add `siteLog` method to allow getting site logs by @duncanmcclean in https://github.com/laravel/forge-sdk/pull/138

## [v3.12.0](https://github.com/laravel/forge-sdk/compare/v3.11.0...v3.12.0) - 2022-02-08

### Added

- Added syncDatabases function ([#136](https://github.com/laravel/forge-sdk/pull/136))

## [v3.11.0 (2022-01-17)](https://github.com/laravel/forge-sdk/compare/v3.10.0...v3.11.0)

### Fixed

- Update site aliases ([#135](https://github.com/laravel/forge-sdk/pull/135))

## [v3.10.0 (2021-11-23)](https://github.com/laravel/forge-sdk/compare/v3.9.0...v3.10.0)

### Added

- Add deployment history ([#131](https://github.com/laravel/forge-sdk/pull/131))

## [v3.9.0 (2021-10-05)](https://github.com/laravel/forge-sdk/compare/v3.8.0...v3.9.0)

### Added

- Add support for site and server tags in respective resources ([#126](https://github.com/laravel/forge-sdk/pull/126))
- Add PHP 8 as an installable service ([#127](https://github.com/laravel/forge-sdk/pull/127))

## [v3.8.0 (2021-07-26)](https://github.com/laravel/forge-sdk/compare/v3.7.0...v3.8.0)

### Added

- `executeSiteCommand` now returns an instance of `SiteCommand::class` ([#121](https://github.com/laravel/forge-sdk/pull/121))
- `id` property to the `Event::class` resource ([#121](https://github.com/laravel/forge-sdk/pull/121))

## [v3.7.0 (2021-06-01)](https://github.com/laravel/forge-sdk/compare/v3.6.0...v3.7.0)

### Added

- Add ability to update backup configurations ([#120](https://github.com/laravel/forge-sdk/pull/120))

## [v3.6.0 (2021-04-27)](https://github.com/laravel/forge-sdk/compare/v3.5.0...v3.6.0)

### Added

- Add Site commands to SDK ([#115](https://github.com/laravel/forge-sdk/pull/115))
- Adds new/missing properties to Resources/Site ([#118](https://github.com/laravel/forge-sdk/pull/118))
- Add change site PHP version methods to SDK ([#117](https://github.com/laravel/forge-sdk/pull/117))

## [v3.5.0 (2021-03-02)](https://github.com/laravel/forge-sdk/compare/v3.4.0...v3.5.0)

### Added

- Added meilisearch to serverTypes ([#110](https://github.com/laravel/forge-sdk/pull/110))

### Fixed

- Allow TimeoutException to be passed `null` values ([#111](https://github.com/laravel/forge-sdk/pull/111))

## [v3.4.0 (2021-03-02)](https://github.com/laravel/forge-sdk/compare/v3.3.1...v3.4.0)

### Added

- Add types to Server object ([#106](https://github.com/laravel/forge-sdk/pull/106))
- Nginx Templates ([#107](https://github.com/laravel/forge-sdk/pull/107))

## [v3.3.1 (2020-12-14)](https://github.com/laravel/forge-sdk/compare/v3.3.0...v3.3.1)

### Fixed

- Fix deployments `$wait` ([9d24051](https://github.com/laravel/forge-sdk/commit/9d24051ae1cf5fd28109713b7d7712fcd80e194b))

## [v3.3.0 (2020-11-03)](https://github.com/laravel/forge-sdk/compare/v3.2.0...v3.3.0)

### Added

- PHP 8 Support ([#98](https://github.com/laravel/forge-sdk/pull/98))

## [v3.2.0 (2020-09-22)](https://github.com/laravel/forge-sdk/compare/v3.1.0...v3.2.0)

### Added

- Add site aliases function ([#95](https://github.com/laravel/forge-sdk/pull/95))
- Forge defaults as class constants ([#94](https://github.com/laravel/forge-sdk/pull/94))

## [v3.1.0 (2020-09-01)](https://github.com/laravel/forge-sdk/compare/v3.0.0...v3.1.0)

### Added

- Add restart worker ([d62ecb4](https://github.com/laravel/forge-sdk/commit/d62ecb4b654b0fa5db1dc5e8cb0131bb1ef92d27))

### Fixed

- Fix delete action for RedirectRule ([#91](https://github.com/laravel/forge-sdk/pull/91))
- Fix Worker resource delete method ([#90](https://github.com/laravel/forge-sdk/pull/90))

## [v3.0.0 (2020-08-25)](https://github.com/laravel/forge-sdk/compare/v2.2...v3.0.0)

### Added

- Security rules ([#83](https://github.com/laravel/forge-sdk/pull/83))
- Add installPHP and updatePHP methods ([ef5da6e](https://github.com/laravel/forge-sdk/commit/ef5da6e2c30ffb58674fb2984e8d4a0c31e6ac2c))
- Add full PHP management methods ([#84](https://github.com/laravel/forge-sdk/pull/84))
- Adds installPhpMyAdmin install and deletePhpMyAdmin methods ([#85](https://github.com/laravel/forge-sdk/pull/85))
- Adds `resetDeploymentState()` and `siteDeploymentLog()` to `Site` resource ([#88](https://github.com/laravel/forge-sdk/pull/88))

### Changed

- Renamed namespaces ([fdcc996](https://github.com/laravel/forge-sdk/commit/fdcc996209681e252ddc060ee983fec327af10de))
- Changed `$apiKey` property visibility ([88cbb08](https://github.com/laravel/forge-sdk/commit/88cbb08014b3ea3768e47c3a9e14367b7d10f59f))
- Update rebootPHP method ([f619c0f](https://github.com/laravel/forge-sdk/commit/f619c0f57dbd3b632b5e424f2288135f811719a1))
- Remove references to only MySQL databases ([#86](https://github.com/laravel/forge-sdk/pull/86), [628b083](https://github.com/laravel/forge-sdk/commit/628b08303a3801e9279ea2b561e7d899327992bb))
- Rename `SSHKey` method to `sshKey` ([af6860f](https://github.com/laravel/forge-sdk/commit/af6860f505fff7a8cff623ab32e3edab73f79559))

### Fixed

- Fix empty collection ([26dedb8](https://github.com/laravel/forge-sdk/commit/26dedb8ca7dfac49d0f6fe35d3444eb3d0a52a7b))

## v2.2 (2020-05-14)
