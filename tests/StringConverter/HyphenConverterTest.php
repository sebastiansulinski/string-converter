<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class HyphenConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_hyphen_to_class_name()
    {
        $this->assertSame('PhpEol', Factory::hyphenToClassName(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_camel()
    {
        $this->assertSame('phpEol', Factory::hyphenToCamel(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_constant()
    {
        $this->assertSame('PHP_EOL', Factory::hyphenToConstant(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_underscore()
    {
        $this->assertSame('php_eol', Factory::hyphenToUnderscore(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_space()
    {
        $this->assertSame('php eol', Factory::hyphenToSpace(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_space_and_upper_case()
    {
        $this->assertSame('PHP EOL', Factory::hyphenToSpace(ucfirst(parent::STRING_HYPHEN), 'strtoupper'));
    }
}