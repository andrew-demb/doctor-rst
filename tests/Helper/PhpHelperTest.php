<?php

declare(strict_types=1);

/*
 * This file is part of DOCtor-RST.
 *
 * (c) Oskar Stark <oskarstark@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Helper;

use App\Helper\PhpHelper;
use PHPUnit\Framework\TestCase;

class PhpHelperTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider isCommentProvider
     */
    public function isComment(bool $expected, string $line)
    {
        $this->assertSame(
            $expected,
            PhpHelper::isComment($line)
        );
    }

    public function isCommentProvider()
    {
        yield [true, '# comment'];
        yield [true, '// comment'];
        yield [false, 'no comment'];
    }
}
