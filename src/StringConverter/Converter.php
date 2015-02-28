<?php namespace SSD\StringConverter;


abstract class Converter {


    /**
     * Prepend underscore.
     *
     * @param $params
     *
     * @return string
     */
    final public function underscore($params)
    {

        return "_" . $params[1];

    }


    /**
     * Prepend hyphen.
     *
     * @param $params
     *
     * @return string
     */
    final protected function hyphen($params)
    {

        return "-" . $params[1];

    }


    /**
     * Convert first letter to upper case.
     *
     * @param $params
     *
     * @return string
     */
    final protected function upperCaseFirst($params)
    {

        return ucfirst($params[1]);

    }


}