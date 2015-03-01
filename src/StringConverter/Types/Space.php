<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

use SSD\StringConverter\Traits\Camelable;
use SSD\StringConverter\Traits\Constantable;
use SSD\StringConverter\Traits\Hyphenable;
use SSD\StringConverter\Traits\Underscoreable;


class Space extends Converter {

    use Camelable, Constantable, Hyphenable, Underscoreable;


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
            RegEx::REGEX_SPACE,
            [$this, $method],
            $string
        );

    }


}