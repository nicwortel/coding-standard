vendor: composer.json

.PHONY: check
check: vendor
	vendor/bin/phpcs tests/correct/
	vendor/bin/phpcs tests/incorrect/ --parallel=1 --report=csv | LC_ALL=C sort > phpcs.csv; diff tests/expected.csv phpcs.csv

.PHONY: tests/expected.csv
tests/expected.csv: vendor
	vendor/bin/phpcs tests/incorrect/ --parallel=1 --report=csv | LC_ALL=C sort > $@
