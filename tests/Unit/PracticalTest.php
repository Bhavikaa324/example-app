<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/practical.php');
use practicals\practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(practical::add(1,3), 4);
    
   }
    public function testAddNumeric():void
    {
	    $this->expectsException(\InvalidArgumentException::class);
	    practical::add('abc','xyz');
    }
}

?>
