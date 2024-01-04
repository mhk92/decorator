<?php
	
	namespace app;
	
	class RedColor extends T_shirtDecorator
	{
		public const EXTRA_PRICE = 10;
		
		public function getPrice(): int
		{
			return $this->sellable->getPrice() * self::EXTRA_PRICE;
		}
	}