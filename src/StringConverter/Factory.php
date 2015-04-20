<?php namespace SSD\StringConverter;


use BadMethodCallException;

class Factory {


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
     * Split name into array using capital letters as delimiter.
     *
     * @param $name
     *
     * @return array
     */
    private static function splitName($name)
    {

        return explode('To', $name);

    }


    /**
     * Get array with index 0 representing class name
     * and index 1 representing the method name.
     *
     * @param $name
     *
     * @return array
     * @throws \BadMethodCallException
     */
    private static function getClass($name)
    {

        $elements = static::splitName($name);

        if (count($elements) < 2) {

            throw new BadMethodCallException(
                "The method you called does not contain both operands"
            );

        }

        return [
            static::className($elements[0]),
            static::className($elements[1])
        ];

    }


    /**
     * Call the method statically on the Converter sub-class.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     * @throws \BadMethodCallException
     */
    public static function __callStatic($name, array $arguments = [])
    {

        $className = static::getClass($name);

        if (!class_exists($className[0]) || !class_exists($className[1])) {

            throw new BadMethodCallException(
                "The format class you're trying to convert to does not exists"
            );

        }

        array_unshift($arguments, new $className[0]);

        return call_user_func_array(
            [new $className[1], 'from'],
            $arguments
        );

    }

}