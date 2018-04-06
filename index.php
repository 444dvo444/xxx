<?php
/**
 * Created by PhpStorm.
 * User: Alexander Hakobyan
 * Date: 06.04.2018
 * Time: 17:17
 * @license http://www.nwslab.com/ NWS Lab product
 */

class Test{
    public $test = 'test';
}

class TestTwo{
    public $test = 'test';
}

$obj = new Test();
$obj1 = new TestTwo();
if($obj == $obj1)
    echo 'ok';