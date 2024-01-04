<?php
	
	namespace app;
	
	interface Sellable
	{
		public function getPrice(): int;
	}