<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Hyphen extends Converter implements Contract {


    /**
     * Convert to hyphen format.
     *
     * @param $string
     * @return string
     */
    public function to($string)
    {

        return strtolower(
            $this->recipe(
                $string,
                'hyphen'
            )
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
            RegEx::REGEX_HYPHEN,
            [$this, $method],
            $string
        );

    }
}