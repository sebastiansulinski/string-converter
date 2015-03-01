<?php

use SSD\StringConverter\Factory;


class HyphenConverterTest extends BaseTest {


    public function testHyphenToCamel()
    {

        $result = Factory::hyphenToCamel(parent::STRING_HYPHEN);

        $this->assertSame(parent::STRING_CAMEL, $result);

    }

    public function testHyphenToConstant()
    {

        $result = Factory::hyphenToConstant(parent::STRING_HYPHEN);

        $this->assertSame(parent::STRING_CONSTANT, $result);

    }

    public function testHyphenToUnderscore()
    {

        $result = Factory::hyphenToUnderscore(parent::STRING_HYPHEN);

        $this->assertSame(parent::STRING_UNDERSCORE, $result);

    }

    public function testHyphenToSpace()
    {

        $result = Factory::hyphenToSpace(ucfirst(parent::STRING_HYPHEN), 'strtolower');

        $this->assertSame(parent::STRING_SPACE, $result);

    }

    public function testHyphenToSpaceFails()
    {

        $result = Factory::hyphenToSpace(ucfirst(parent::STRING_HYPHEN));

        $this->assertNotSame(parent::STRING_SPACE, $result);

    }

}