<?php

namespace SSD\StringConverter;

/**
 * @method static string camelToClassName(string $string, callable $callback = null)
 * @method static string camelToConstant(string $string, callable $callback = null)
 * @method static string camelToHyphen(string $string, callable $callback = null)
 * @method static string camelToUnderscore(string $string, callable $callback = null)
 * @method static string camelToSpace(string $string, callable $callback = null)
 * @method static string classNameToCamel(string $string, callable $callback = null)
 * @method static string classNameToConstant(string $string, callable $callback = null)
 * @method static string classNameToHyphen(string $string, callable $callback = null)
 * @method static string classNameToUnderscore(string $string, callable $callback = null)
 * @method static string classNameToSpace(string $string, callable $callback = null)
 * @method static string constantToClassName(string $string, callable $callback = null)
 * @method static string constantToCamel(string $string, callable $callback = null)
 * @method static string constantToHyphen(string $string, callable $callback = null)
 * @method static string constantToUnderscore(string $string, callable $callback = null)
 * @method static string constantToSpace(string $string, callable $callback = null)
 * @method static string hyphenToClassName(string $string, callable $callback = null)
 * @method static string hyphenToCamel(string $string, callable $callback = null)
 * @method static string hyphenToConstant(string $string, callable $callback = null)
 * @method static string hyphenToUnderscore(string $string, callable $callback = null)
 * @method static string hyphenToSpace(string $string, callable $callback = null)
 * @method static string spaceToClassName(string $string, callable $callback = null)
 * @method static string spaceToCamel(string $string, callable $callback = null)
 * @method static string spaceToConstant(string $string, callable $callback = null)
 * @method static string spaceToHyphen(string $string, callable $callback = null)
 * @method static string spaceToUnderscore(string $string, callable $callback = null)
 * @method static string underscoreToClassName(string $string, callable $callback = null)
 * @method static string underscoreToCamel(string $string, callable $callback = null)
 * @method static string underscoreToConstant(string $string, callable $callback = null)
 * @method static string underscoreToHyphen(string $string, callable $callback = null)
 * @method static string underscoreToSpace(string $string, callable $callback = null)
 */
class Factory
{
    /**
     * Split name into array using capital letters as delimiter.
     */
    private static function splitName(string $name): array
    {
        return explode('To', $name);
    }

    /**
     * Get array of class names.
     */
    private static function getClass(string $name): Container
    {
        return new Container(...static::splitName($name));
    }

    /**
     * Call the method statically on the Converter sub-class.
     */
    public static function __callStatic(string $name, array $arguments = []): string
    {
        $container = static::getClass($name);

        array_unshift($arguments, $container->from());

        return $container->to()->from(...$arguments);
    }
}
