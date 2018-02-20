.PHONY: test
test:
	vendor/bin/phpcs --standard=ruleset.xml --basepath=. --report-file=phpcs.log --report-width=120 tests/; diff tests/expected.log phpcs.log

.PHONY: tests/expected.log
tests/expected.log:
	vendor/bin/phpcs --standard=ruleset.xml --basepath=. --report-file=$@ --report-width=120 tests/
