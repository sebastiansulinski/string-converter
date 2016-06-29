<?php

use SSD\StringConverter\Factory;


class SpaceConverterCase extends BaseCase
{

    public function testSpaceToClassName()
    {

        $result = Factory::spaceToClassName(parent::STRING_SPACE);

        $this->assertSame(parent::STRING_CLASS_NAME, $result);

    }

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