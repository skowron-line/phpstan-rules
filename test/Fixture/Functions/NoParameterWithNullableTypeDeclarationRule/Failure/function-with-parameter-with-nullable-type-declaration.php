<?php

declare(strict_types=1);

namespace Ergebnis\PHPStan\Rules\Test\Fixture\Functions\NoParameterWithNullableTypeDeclarationRule\Failure;

function foo(?string $bar)
{
    return $bar;
}
