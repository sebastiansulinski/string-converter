<?php namespace SSD\StringConverter\Traits;


trait Constantable {

    /**
     * Convert to upper-case underscore.
     *
     * @param $string
     *
     * @return string
     */
    public function toConstant($string)
    {

        return strtoupper($this->express($string, 'underscore'));

    }

}