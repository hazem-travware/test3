<?php

require __DIR__ . '/vendor/autoload.php';



class MyTestClass extends PHPUnit\Framework\TestCase
{
    // Define a test method
    public function testAddition()
    {
        // Perform assertions to test the functionality
        $this->assertEquals(4, 2 + 2);
    }

    // Define another test method
    public function testSubtraction()
    {
        // Perform assertions to test the functionality
        try {
            $this->assertEquals(2, 4 - 2);
            echo "Assertion passed: 4 - 2 equals 2\n";
        } catch (\PHPUnit\Framework\AssertionFailedError $e) {
            echo "Assertion failed: " . $e->getMessage() . "\n";
        }   
    
    }
}

$obj = new MyTestClass('pp');

$res = $obj->testSubtraction();
print_r(gettype($res));


$new = new PHPUnit\Framework\TestCase('rr');

try {
    $new->assertEquals(2, 4 - 2);
    echo "Assertion passed: 4 - 2 equals 2\n";
} catch (\PHPUnit\Framework\AssertionFailedError $e) {
    echo "Assertion failed: " . $e->getMessage() . "\n";
}   