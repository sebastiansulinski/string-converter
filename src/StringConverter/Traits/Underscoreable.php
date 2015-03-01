<?php namespace SSD\StringConverter\Traits;


trait Underscoreable {

    /**
     * Convert to lower-case underscore.
     *
     * @param $string
     *
     * @return string
     */
    public function toUnderscore($string)
    {

        return strtolower($this->express($string, 'underscore'));

    }

}