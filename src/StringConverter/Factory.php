<?php

namespace SSD\StringConverter;

class Factory
{
    /**
     * Split name into array using capital letters as delimiter.
     *
     * @param  string $name
     * @return array
     */
    private static function splitName(string $name): array
    {
        return explode('To', $name);
    }

    /**
     * Get array of class names.
     *
     * @param  string $name
     * @return \SSD\StringConverter\Container
     */
    private static function getClass(string $name): Container
    {
        return new Container(...static::splitName($name));
    }

    /**
     * Call the method statically on the Converter sub-class.
     *
     * @param  string $name
     * @param  array $arguments
     * @return string
     */
    public static function __callStatic(string $name, array $arguments = []): string
    {
        $container = static::getClass($name);

        array_unshift($arguments, $container->from());

        return $container->to()->from(...$arguments);
    }
}