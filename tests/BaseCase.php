<?php

namespace SSDTest;

use PHPUnit\Framework\TestCase;

abstract class BaseCase extends TestCase
{
    /**
     * Class name case.
     *
     * @var string
     */
    const STRING_CLASS_NAME = 'PhpEol';

    /**
     * Camel case.
     *
     * @var string
     */
    const STRING_CAMEL = 'phpEol';

    /**
     * Constant case.
     *
     * @var string
     */
    const STRING_CONSTANT = 'PHP_EOL';

    /**
     * Hyphen case.
     *
     * @var string
     */
    const STRING_HYPHEN = 'php-eol';

    /**
     * Underscore case.
     *
     * @var string
     */
    const STRING_UNDERSCORE = 'php_eol';

    /**
     * Space case.
     *
     * @var string
     */
    const STRING_SPACE = 'php eol';
}