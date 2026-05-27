# CHANGELOG

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [5.0.0] - 2026-05-27

### Changed

* composer package dependencies
  * `php` [^8.5]
  * `phpunit/phpunit` [^13.1.10]
  * `rector/rector` [^2.4.3]
* composer package metadata and scripts
  * updated package description and keywords
  * added `autoload-dev` for the test namespace
  * added `analyse`, `test` and `test-coverage` scripts
* updated `TestCase` to provide its assertions through native constraints
* updated the `README.md` to document the current public API
* rector usage
  * renamed the configuration to `build/rectorConfiguration.php`
  * updated the configuration to PHP 8.5 and expanded rule sets
  * updated the shell script with dry-run, apply-changes, passthrough and help options
* moved the code of conduct from `docs/CODE_OF_CONDUCT.md` to `CODE_OF_CONDUCT.md`

### Added

* composer package dependencies
  * `phpstan/phpstan` [^2.1.54]
* `DataProviderInterface` as a shared contract for external PHPUnit data providers
* `TestCaseInterface` as a shared contract for the custom test case wrapper
* keyed and unkeyed array contains subset assertions
* keyed and unkeyed subset-of-array assertions
* subclass relationship assertion
* native keyed and unkeyed array subset constraints
* native subclass relationship constraint
* shared array subset helpers for strict and non-strict recursive comparisons
* strict PHPUnit 13 test suite and coverage configuration
* PHPStan configuration
* test accessors, fixtures, data providers and unit tests for the public API and protected extension points
* GitHub Actions workflows for test runs and release creation
* CI configuration for PHP version and dependency-version matrices
* release archive exclusions for build tooling

### Removed

* composer package dependencies
  * `dms/phpunit-arraysubset-asserts`

[5.0.0]: https://github.com/codekandis/phpunit/compare/4.0.0..5.0.0

---
## [4.0.0] - 2022-08-28

### Changed

* composer package dependencies
  * `php` [^8.1]
* updated the PHP version in the `README.md` to `8.1`

### Added

* composer package dependencies
  * `rector/rector` [^0]
* rector configuration with set list `PHP_81`
* rector shell script

[4.0.0]: https://github.com/codekandis/phpunit/compare/3.0.0..4.0.0

---
## [3.0.0] - 2021-01-17

### Changed

* composer package dependencies
  * `minimum-stability` [stable]
  * `php` [^7.4]
* updated the PHP version in the `README.md` to `7.4`

### Removed

* composer package dependencies
  * `sensiolabs/security-checker`

[3.0.0]: https://github.com/codekandis/phpunit/compare/2.0.1..3.0.0

---
## [2.0.1] - 2021-01-17

### Changed

* the release version in the `README.md`

[2.0.1]: https://github.com/codekandis/phpunit/compare/2.0.0..2.0.1

---
## [2.0.0] - 2020-08-01

### Changed

* composer package dependencies
  * `phpunit/phpunit` [^9]

[2.0.0]: https://github.com/codekandis/phpunit/compare/1.0.0..2.0.0

---
## [1.0.0] - 2019-12-27

### Added

* wrapper for `PHPUnit\Framework\TestCase`
* extension `dms/phpunit-arraysubset-asserts`
* `README.md`
* `CHANGELOG.md`

[1.0.0]: https://github.com/codekandis/phpunit/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
