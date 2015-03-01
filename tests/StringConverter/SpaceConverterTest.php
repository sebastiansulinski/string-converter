<?php

use SSD\StringConverter\Factory;


class SpaceConverterTest extends BaseTest {


    public function testSpaceToCamel()
    {

        $result = Factory::spaceToCamel(parent::STRING_SPACE);

        $this->assertSame(parent::STRING_CAMEL, $result);

    }

    public function testSpaceToConstant()
    {

        $result = Factory::spaceToConstant(parent::STRING_SPACE);

        $this->assertSame(parent::STRING_CONSTANT, $result);

    }

    public function testSpaceToHyphen()
    {

        $result = Factory::spaceToHyphen(parent::STRING_SPACE);

        $this->assertSame(parent::STRING_HYPHEN, $result);

    }

    public function testSpaceToUnderscore()
    {

        $result = Factory::spaceToUnderscore(parent::STRING_SPACE);

        $this->assertSame(parent::STRING_UNDERSCORE, $result);

    }


}