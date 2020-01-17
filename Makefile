.PHONY: test test-expected test-flawed

test: test-expected test-flawed

test-expected: vendor
	vendor/bin/phpcs test/Expected

test-flawed: vendor
	-vendor/bin/phpcs test/Flawed --report=summary --report-file=phpcs_flawed.txt
	diff test/flawed_summary.txt phpcs_flawed.txt

vendor: composer.json
	composer install
