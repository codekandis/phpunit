# CHANGELOG

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [5.0.0] - 2025-09-24

### Changed

* composer packages
  * changed
    * keywords
    * require
      * `php` [>=8.4]
      * `dms/phpunit-arraysubset-asserts` [5.0.0]
      * `phpunit/phpunit` [^10.5.56]
    * require-dev
      * `rector/rector` [^1.2.10]
* moved `CODE_OF_CONDUCT.md`

### Added

* `DataProviderInterface` representing any external data provider
* subclass assertion
* `rector` scripts
* `GitHub` workflows
* `.gitattributes` to ignore dev-assets

[5.0.0]: https://github.com/codekandis/phpunit/compare/4.0.0...5.0.0

---
## [5.0.0] - 2025-09-24

### Changed

* composer package dependencies
  * changed
    * `php` [^8.1]
  * added
    * `rector/rector` [^0]
* updated the PHP version in the `README.md` to `8.1`

### Added

* rector configuration with set list `PHP_81`
* rector shell script

[5.0.0]: https://github.com/codekandis/phpunit/compare/3.0.0...4.0.0

---
## [5.0.0] - 2025-09-24

### Changed

* composer package dependencies
  * changed
    * `minimum-stability` [stable]
    * `php` [^7.4]
  * removed
    * `sensiolabs/security-checker`
* updated the PHP version in the `README.md` to `7.4`

[5.0.0]: https://github.com/codekandis/phpunit/compare/2.0.1...3.0.0

---
## [5.0.0] - 2025-09-24

### Changed

* the release version in the `README.md`

[5.0.0]: https://github.com/codekandis/phpunit/compare/2.0.0...2.0.1

---
## [5.0.0] - 2025-09-24

### Changed

* composer package dependencies
  * changed
    * `phpunit/phpunit` [^9]

[5.0.0]: https://github.com/codekandis/phpunit/compare/1.0.0...2.0.0

---
## [5.0.0] - 2025-09-24

### Added

* wrapper for `PHPUnit\Framework\TestCase`
* extension `dms/phpunit-arraysubset-asserts`
* `README.md`
* `CHANGELOG.md`

[5.0.0]: https://github.com/codekandis/phpunit/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
