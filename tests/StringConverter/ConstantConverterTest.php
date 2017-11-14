<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class ConstantConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_constant_to_class_name()
    {
        $this->assertSame('PhpEol', Factory::constantToClassName(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_camel()
    {
        $this->assertSame('phpEol', Factory::constantToCamel(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_hyphen()
    {
        $this->assertSame('PHP-EOL', Factory::constantToHyphen(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_underscore()
    {
        $this->assertSame('PHP_EOL', Factory::constantToUnderscore(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_space()
    {
        $this->assertSame('PHP EOL', Factory::constantToSpace(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_space_and_lower_case()
    {
        $this->assertSame('php eol', Factory::constantToSpace(parent::STRING_CONSTANT, 'strtolower'));
    }
}