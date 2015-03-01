<?php namespace SSD\StringConverter\Traits;


trait Camelable {

    /**
     * Convert hyphens to camel case.
     *
     * @param $string
     *
     * @return mixed
     */
    public function toCamel($string)
    {

        return $this->express(strtolower($string), 'upperCaseFirst');

    }

}