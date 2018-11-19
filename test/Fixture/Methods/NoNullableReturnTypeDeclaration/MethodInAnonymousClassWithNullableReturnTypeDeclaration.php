<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018 Andreas Möller.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/phpstan-rules
 */

namespace Localheinz\PHPStan\Rules\Test\Fixture\Methods\NoNullableReturnTypeDeclaration;

final class MethodInAnonymousClassWithNullableReturnTypeDeclaration
{
    public function foo()
    {
        return new class() {
            public function toString(): ?string
            {
                return 'Hello';
            }
        };
    }
}
