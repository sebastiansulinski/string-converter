<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

use SSD\StringConverter\Traits\Constantable;
use SSD\StringConverter\Traits\Hyphenable;
use SSD\StringConverter\Traits\Spaceable;
use SSD\StringConverter\Traits\Underscoreable;


class Camel extends Converter {

    use Constantable, Hyphenable, Underscoreable, Spaceable;


    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     *
     * @return mixed
     */
    protected function express($string, $method)
    {

        return preg_replace_callback(
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $string
        );

    }


}