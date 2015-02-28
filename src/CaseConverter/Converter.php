<?php namespace SSD\CaseConverter;


class Converter {

    /**
     * Convert from camel case to capital letters with underscores.
     *
     * @param $string
     *
     * @return string
     */
    public function fromCamelToConstant($string)
    {

        $underscored = preg_replace_callback(
            '/([A-Z])/',
            [$this, 'toUnderscore'],
            $string
        );

        return strtoupper($underscored);

    }


    /**
     * Prepend underscore.
     *
     * @param $params
     *
     * @return string
     */
    private function toUnderscore($params)
    {

        return "_" . $params[1];

    }


    /**
     * Convert hyphens to camel case.
     *
     * @param $string
     *
     * @return mixed
     */
    public function hyphenToCamel($string)
    {

        return preg_replace_callback('/-(.)/', [$this, 'toUCFirst'], $string);

    }


    /**
     * Convert snake case to camel case.
     *
     * @param $string
     *
     * @return mixed
     */
    public function underScoreToCamel($string)
    {

        return preg_replace_callback('/_(.)/', [$this, 'toUCFirst'], $string);

    }


    /**
     * Convert underscore to first letters of each word in capital.
     *
     * @param $string
     *
     * @return mixed
     */
    public function underScoreToUCWords($string)
    {

        return ucfirst(preg_replace_callback('/_(.)/', [$this, 'toUCFirst'], $string));

    }


    /**
     * Change first letter to capital.
     *
     * @param $params
     *
     * @return string
     */
    private function toUCFirst($params)
    {

        return ucfirst($params[1]);

    }


}