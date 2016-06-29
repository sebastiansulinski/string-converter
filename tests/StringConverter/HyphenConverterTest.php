<?php

use SSD\StringConverter\Factory;


class HyphenConverterCase extends BaseCase
{

    public function testHyphenToClassName()
    {

        $result = Factory::hyphenToClassName(parent::STRING_HYPHEN);

        $this->assertSame('PhpEol', $result);

    }

    public function testHyphenToCamel()
    {

        $result = Factory::hyphenToCamel(parent::STRING_HYPHEN);

        $this->assertSame('phpEol', $result);

    }

    public function testHyphenToConstant()
    {

        $result = Factory::hyphenToConstant(parent::STRING_HYPHEN);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testHyphenToUnderscore()
    {

        $result = Factory::hyphenToUnderscore(parent::STRING_HYPHEN);

        $this->assertSame('php_eol', $result);

    }

    public function testHyphenToSpace()
    {

        $result = Factory::hyphenToSpace(parent::STRING_HYPHEN);

        $this->assertSame('php eol', $result);

    }

    public function testHyphenToSpaceStringToUpper()
    {

        $result = Factory::hyphenToSpace(ucfirst(parent::STRING_HYPHEN), 'strtoupper');

        $this->assertSame('PHP EOL', $result);

    }

}