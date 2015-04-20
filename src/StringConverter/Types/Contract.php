<?php namespace SSD\StringConverter\Types;


interface Contract {

    public function from(Contract $contract, $string);

    public function recipe($string, $method);

}