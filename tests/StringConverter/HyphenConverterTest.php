<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class HyphenConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_hyphen_to_class_name(): void
    {
        $this->assertSame('PhpEol', Factory::hyphenToClassName(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_camel(): void
    {
        $this->assertSame('phpEol', Factory::hyphenToCamel(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_constant(): void
    {
        $this->assertSame('PHP_EOL', Factory::hyphenToConstant(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_underscore(): void
    {
        $this->assertSame('php_eol', Factory::hyphenToUnderscore(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_space(): void
    {
        $this->assertSame('php eol', Factory::hyphenToSpace(parent::STRING_HYPHEN));
    }

    /**
     * @test
     */
    public function converts_hyphen_to_space_and_upper_case(): void
    {
        $this->assertSame('PHP EOL', Factory::hyphenToSpace(ucfirst(parent::STRING_HYPHEN), 'strtoupper'));
    }
}
