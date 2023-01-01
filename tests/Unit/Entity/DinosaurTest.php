<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase {
	public function testItWorks():void {
		self::assertEquals(32, 32);
	}

	public function testItWorksTheSame():void{
		self::assertSame(42, 42);
	}
}
