<?php

require __DIR__ . '/vendor/autoload.php';



class MyTestClass extends PHPUnit\Framework\TestCase
{
   

}



$new = new MyTestClass('rr');

try {
    $new->assertEquals(2, 4 - 2);
    echo "Assertion passed: 4 - 2 equals 2\n";
} catch (\PHPUnit\Framework\AssertionFailedError $e) {
    echo "Assertion failed: " . $e->getMessage() . "\n";
}   