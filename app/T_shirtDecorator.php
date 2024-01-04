<?php
	
	namespace app;
	
	abstract class T_shirtDecorator implements Sellable
	{
		public function __construct(public Sellable $sellable){
		
		}
		
		public function getPrice(): int
		{
			return $this->sellable->getPrice();
		}
	}