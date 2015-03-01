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


    /**
     * Convert to space.
     *
     * @param $string
     * @param $function
     *
     * @return mixed
     */
    public function toSpace($string, $function = null)
    {

        $string = $this->express($string, 'space');

        if (empty($function)) {

            return $string;

        }

        return call_user_func(
            $function,
            $string
        );

    }


}