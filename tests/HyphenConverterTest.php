<?php

use SSD\StringConverter\Factory;


class HyphenConverterTest extends BaseTest {


    public function testHyphenToCamel()
    {

        $result = Factory::hyphenToCamel(parent::STRING_HYPHEN);

        $this->assertEquals(parent::STRING_CAMEL, $result);

    }

    public function testHyphenToConstant()
    {

        $result = Factory::hyphenToConstant(parent::STRING_HYPHEN);

        $this->assertEquals(parent::STRING_CONSTANT, $result);

    }

    public function testHyphenToUnderscore()
    {

        $result = Factory::hyphenToUnderscore(parent::STRING_HYPHEN);

        $this->assertEquals(parent::STRING_UNDERSCORE, $result);

    }

}