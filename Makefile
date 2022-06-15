vendor: composer.json

.PHONY: check
check: vendor
	vendor/bin/phpcs tests/correct/
	vendor/bin/phpcs $(shell find tests/incorrect/* | sort) --parallel=1 --report=csv --report-file=phpcs.csv; diff tests/expected.csv phpcs.csv

.PHONY: tests/expected.csv
tests/expected.csv: vendor
	vendor/bin/phpcs $(shell find tests/incorrect/* | sort) --parallel=1 --report=csv --report-file=$@
