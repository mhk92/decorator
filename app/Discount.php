<?php
	
	namespace app;
	
	class Discount extends T_shirtDecorator
	{
		public const DISCOUNT = 20;
		public function getPrice(): int
		{
			return $this->sellable->getPrice() - self::DISCOUNT;
		}
	}