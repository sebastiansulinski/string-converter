<?php

namespace SSD\StringConverter;

abstract class Converter
{
    /**
     * Convert first letter to upper case.
     */
    final protected function upperCaseFirst(array $params): string
    {
        return ucfirst($params[1]);
    }

    /**
     * Prepend hyphen.
     */
    final protected function hyphen(array $params): string
    {
        return '-'.$params[1];
    }

    /**
     * Prepend underscore.
     */
    final public function underscore(array $params): string
    {
        return '_'.$params[1];
    }

    /**
     * Prepend space.
     */
    final protected function space(array $params): string
    {
        return ' '.$params[1];
    }

    /**
     * Callback.
     */
    final protected function callback(string $string, ?callable $callback = null): string
    {
        if (! is_callable($callback)) {
            return $string;
        }

        return call_user_func($callback, $string);
    }
}
