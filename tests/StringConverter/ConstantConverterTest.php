<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class ConstantConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_constant_to_class_name(): void
    {
        $this->assertSame('PhpEol', Factory::constantToClassName(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_camel(): void
    {
        $this->assertSame('phpEol', Factory::constantToCamel(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_hyphen(): void
    {
        $this->assertSame('PHP-EOL', Factory::constantToHyphen(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_underscore(): void
    {
        $this->assertSame('PHP_EOL', Factory::constantToUnderscore(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_space(): void
    {
        $this->assertSame('PHP EOL', Factory::constantToSpace(parent::STRING_CONSTANT));
    }

    /**
     * @test
     */
    public function converts_constant_to_space_and_lower_case(): void
    {
        $this->assertSame('php eol', Factory::constantToSpace(parent::STRING_CONSTANT, 'strtolower'));
    }
}
