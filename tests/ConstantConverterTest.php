<?php

use SSD\StringConverter\Factory;


class ConstantConverterTest extends BaseTest {


    public function testConstantToCamel()
    {

        $result = Factory::constantToCamel(parent::STRING_CONSTANT);

        $this->assertEquals(parent::STRING_CAMEL, $result);

    }

    public function testConstantToHyphen()
    {

        $result = Factory::constantToHyphen(parent::STRING_CONSTANT);

        $this->assertEquals(parent::STRING_HYPHEN, $result);

    }

    public function testConstantToUnderscore()
    {

        $result = Factory::constantToUnderscore(parent::STRING_CONSTANT);

        $this->assertEquals(parent::STRING_UNDERSCORE, $result);

    }

}