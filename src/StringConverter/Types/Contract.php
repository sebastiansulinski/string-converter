<?php namespace SSD\StringConverter\Types;


interface Contract {

    public function to($string);

    public function recipe($string, $method);

}