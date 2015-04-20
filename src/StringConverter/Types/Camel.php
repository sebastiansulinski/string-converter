<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Camel extends Converter implements Contract {


    /**
     * Convert to camel case format.
     *
     * @param $string
     * @return string
     */
    public function to($string)
    {
        return $this->recipe(
            strtolower($string),
            'upperCaseFirst'
        );
    }


    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     *
     * @return mixed
     */
    public function recipe($string, $method)
    {

        return preg_replace_callback(
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $string
        );

    }
}