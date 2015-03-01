<?php namespace SSD\StringConverter\Traits;


trait Hyphenable {

    /**
     * Convert to lower-case hyphen.
     *
     * @param $string
     *
     * @return mixed
     */
    public function toHyphen($string)
    {

        return strtolower($this->express($string, 'hyphen'));

    }

}