<?php
	
	require dirname(__FILE__)."/vendor/autoload.php";
	
	use PHPUnit\Framework\TestCase;
	
	use App\Discount;
	use App\T_shirt;
	use App\RedColor;
	class TestTotal extends TestCase
	{
		public function testDecorator():void
		{
			$t_shirt = new T_shirt();
			
			$shirt = $t_shirt->getPrice();
			$this->assertSame(30, $shirt);
			
			$red = new RedColor($t_shirt);
			$this->assertSame(40, $red->getPrice());
			
			$discount = new Discount($t_shirt);
			$this->assertSame(10, $discount->getPrice());
		}
	}