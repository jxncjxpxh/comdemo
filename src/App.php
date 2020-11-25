<?php
/**
 * Created by PhpStorm.
 * User: Jackson.Pei
 * Date: 2020/11/25
 * Time: 15:52
 */
namespace Frame;

class App
{
    private $name;

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

}