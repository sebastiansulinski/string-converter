<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class UnderscoreConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_underscore_to_class_name(): void
    {
        $this->assertSame('PhpEol', Factory::underscoreToClassName(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_camel(): void
    {
        $this->assertSame('phpEol', Factory::underscoreToCamel(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_constant(): void
    {
        $this->assertSame('PHP_EOL', Factory::underscoreToConstant(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_hyphen(): void
    {
        $this->assertSame('php-eol', Factory::underscoreToHyphen(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_space(): void
    {
        $this->assertSame('php eol', Factory::underscoreToSpace(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_space_and_upper_case(): void
    {
        $this->assertSame('PHP EOL', Factory::underscoreToSpace(parent::STRING_UNDERSCORE, 'strtoupper'));
    }
}
