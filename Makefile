REPORT = full

.PHONY: test
test:
	vendor/bin/phpcs tests/correct/
	vendor/bin/phpcs $(shell find tests/incorrect/* | sort) --report=$(REPORT) --report-file=phpcs.log --report-width=120; diff tests/expected.log phpcs.log

.PHONY: tests/expected.log
tests/expected.log:
	vendor/bin/phpcs $(shell find tests/incorrect/* | sort) --report=$(REPORT) --report-file=$@ --report-width=120
