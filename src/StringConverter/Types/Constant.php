<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Constant extends Converter {


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
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $string
        );

    }


}