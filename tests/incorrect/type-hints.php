<?php
declare(strict_types=1);

/**
 * @param string $input
 *
 * @return string
 */
function doesNotNeedDocumentationComment(string $input): string
{
}

function wrongNullabilitySymbolSpacing(? string $input): string
{
}

function wrongReturnTypeHintSpacing() :bool
{
}

function missingTypeHints($input)
{
    return $input;
}

function missingTraversableAnnotations(array $input): array
{
}

function nullableDefaultValue(string $input = null): void
{
}

/**
 * @param integer[] $input
 *
 * @return boolean
 */
function longDocBlockTypeHints(array $input): bool
{
}

/**
 * @test
 */
function testAnnotationsAreAllowed(): void
{
}

/**
 * @dataProvider
 */
function getTestData(): void
{
}
