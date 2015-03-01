<?php namespace SSD\StringConverter;


abstract class Converter {


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
     * Prepend space.
     *
     * @param $params
     *
     * @return string
     */
    final protected function space($params)
    {

        return " " . $params[1];
    }


    /**
     * Return result of the regular expression replacement
     *
     * @param $string
     * @param $methodName
     *
     * @return mixed
     */
    abstract protected function express($string, $methodName);



}