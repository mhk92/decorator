<?php
	
	require dirname(__FILE__)."/vendor/autoload.php";
	
	spl_autoload_register(function($class){
		$path = dirname(__FILE__)."\\".$class;
	
		require $path;
	});
	
	
	use PHPUnit\Framework\TestCase;
	
	
	use App\T_shirt;
	
	class TestTotal extends TestCase
	{
		public function testDecorator():void
		{
			$t_shirt = new T_shirt();
			
			$this->assertSame(30, $t_shirt);
		}
	}