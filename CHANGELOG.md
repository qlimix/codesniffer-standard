## 5.0.0 - 04-11-2026

General:
 - squizlabs/php_codesniffer ^4.0
 - slevomat/coding-standard ^8.31

Backwards compatibility changes:
 - `Squiz.WhiteSpace.LanguageConstructSpacing` (removed in PHP_CodeSniffer 4) replaced by
   `Generic.WhiteSpace.LanguageConstructSpacing`

Fixes:
 - ruleset schema location points at this package's own `vendor/squizlabs/php_codesniffer/phpcs.xsd`

## 3.0.0 - 25-10-2020

General:
 - Updated dependencies to latest version

Backwards compatibility changes:
 - Updated flawed summary

## 2.0.0 - 17-01-2020

Backwards compatibility changes:
 - php 7.4 required

New feature:
 - typed properties sniff
 - type array, Traversable, Iterator & IteratorAggregate return and parameters
 - require space after blocks controls (if, do, while, for, foreach, switch, try, default)
 - added makefile
