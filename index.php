<?php
/**
 * Created by PhpStorm.
 * User: Jackson.Pei
 * Date: 2020/11/25
 * Time: 15:53
 */

require './vendor/autoload.php';

use Frame\App;

$o = new App();
$o->setName('jackson');
echo $o->getName();