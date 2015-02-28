<?php namespace SSD\StringConverter;


use BadMethodCallException;
use ReflectionClass;

class Factory {


    /**
     * Return ReflectionClass instance of the Converter class.
     *
     * @return ReflectionClass
     */
    private static function reflection()
    {

        return (new ReflectionClass(new Converter));
    }


    /**
     * Call the method statically on the Converter class instance.
     *
     * @param $method
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($method, array $arguments = [])
    {

        if ( ! static::reflection()->hasMethod($method)) {

            throw new BadMethodCallException("Method {$method} does not exist");

        }

        return call_user_func_array([new Converter, $method], $arguments);

    }

}