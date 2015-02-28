<?php namespace SSD\StringConverter;


use BadMethodCallException;
use ReflectionClass;

class Factory {


    /**
     * Return ReflectionClass instance of the given class.
     *
     * @param $className
     *
     * @return ReflectionClass
     */
    private static function reflection($className)
    {

        return (new ReflectionClass(new $className));
    }


    /**
     * Return formatted class name.
     *
     * @param $name
     *
     * @return string
     */
    private static function className($name)
    {

        return "SSD\\StringConverter\\Types\\".ucfirst($name);

    }


    /**
     * Return formatted method name.
     *
     * @param $elements
     *
     * @return string
     */
    private static function methodName($elements)
    {

        return lcfirst(implode($elements));

    }


    /**
     * Split name into array using capital letters as delimiter.
     *
     * @param $name
     *
     * @return array
     */
    private static function splitName($name)
    {

        return preg_split(
            RegEx::REGEX_CAPITAL_LETTERS,
            $name,
            -1,
            PREG_SPLIT_DELIM_CAPTURE
        );

    }


    /**
     * Get array with index 0 representing class name
     * and index 1 representing the method name.
     *
     * @param $name
     *
     * @return array
     */
    private static function getClassMethod($name)
    {

        $elements = static::splitName($name);

        if (count($elements) < 2) {

            throw new BadMethodCallException(
                "The method you called does not exist"
            );

        }

        return [
            static::className(array_shift($elements)),
            static::methodName($elements)
        ];

    }


    /**
     * Call the method statically on the Converter sub-class.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, array $arguments = [])
    {

        list($className, $method) = static::getClassMethod($name);


        if ( ! static::reflection($className)->hasMethod($method)) {

            throw new BadMethodCallException(
                "Method {$method} does not exist on class {$className}"
            );

        }

        return call_user_func_array(
            [new $className, $method],
            $arguments
        );

    }

}