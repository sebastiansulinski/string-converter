<?php

namespace SSD\StringConverter;

abstract class Converter
{
    /**
     * Convert first letter to upper case.
     *
     * @param array $params
     * @return string
     */
    final protected function upperCaseFirst(array $params)
    {
        return ucfirst($params[1]);
    }

    /**
     * Prepend hyphen.
     *
     * @param array $params
     * @return string
     */
    final protected function hyphen(array $params)
    {
        return "-".$params[1];
    }

    /**
     * Prepend underscore.
     *
     * @param array $params
     * @return string
     */
    final public function underscore(array $params)
    {
        return "_".$params[1];
    }

    /**
     * Prepend space.
     *
     * @param array $params
     * @return string
     */
    final protected function space(array $params)
    {
        return " ".$params[1];
    }

    /**
     * Callback.
     *
     * @param $string
     * @param callable|null $callback
     * @return mixed
     */
    final protected function callback($string, callable $callback = null)
    {
        if ( ! is_callable($callback)) {
            return $string;
        }

        return call_user_func($callback, $string);
    }
}