<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class UnderscoreConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_underscore_to_class_name()
    {
        $this->assertSame('PhpEol', Factory::underscoreToClassName(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_camel()
    {
        $this->assertSame('phpEol', Factory::underscoreToCamel(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_constant()
    {
        $this->assertSame('PHP_EOL', Factory::underscoreToConstant(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_hyphen()
    {
        $this->assertSame('php-eol', Factory::underscoreToHyphen(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_space()
    {
        $this->assertSame('php eol', Factory::underscoreToSpace(parent::STRING_UNDERSCORE));
    }

    /**
     * @test
     */
    public function converts_underscore_to_space_and_upper_case()
    {
        $this->assertSame('PHP EOL', Factory::underscoreToSpace(parent::STRING_UNDERSCORE, 'strtoupper'));
    }
}