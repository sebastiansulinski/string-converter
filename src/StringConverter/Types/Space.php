<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Space extends Converter implements Contract {


    /**
     * Convert to space format.
     * Call optional function on callback.
     *
     * @param $string
     * @param null $function
     * @return mixed
     */
    public function to($string, $function = null)
    {

        $string = $this->recipe($string, 'space');

        if (empty($function)) {

            return $string;

        }

        return call_user_func(
            $function,
            $string
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
            RegEx::REGEX_SPACE,
            [$this, $method],
            $string
        );

    }
}