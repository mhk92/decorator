<?php
	
	namespace app;
	
	class T_shirt implements Sellable
	{
		public const PRICE = 30;
		public function getPrice(): int
		{
			return self::PRICE;
		}
	}