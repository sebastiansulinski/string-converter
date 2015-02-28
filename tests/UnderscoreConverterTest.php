<?php

use SSD\StringConverter\Factory;


class UnderscoreConverterTest extends BaseTest {


    public function testUnderscoreToCamel()
    {

        $result = Factory::underscoreToCamel(parent::STRING_UNDERSCORE);

        $this->assertEquals(parent::STRING_CAMEL, $result);

    }

    public function testUnderscoreToConstant()
    {

        $result = Factory::underscoreToConstant(parent::STRING_UNDERSCORE);

        $this->assertEquals(parent::STRING_CONSTANT, $result);

    }

    public function testUnderscoreToHyphen()
    {

        $result = Factory::underscoreToHyphen(parent::STRING_UNDERSCORE);

        $this->assertEquals(parent::STRING_HYPHEN, $result);

    }

}