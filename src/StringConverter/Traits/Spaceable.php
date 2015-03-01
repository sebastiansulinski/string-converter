<?php namespace SSD\StringConverter\Traits;


trait Spaceable {

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