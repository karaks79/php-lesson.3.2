<?php

	// Суперкласс
	class SuperClass {
		protected $Code = 0;		// Код
		public function getCode()
		{
			echo "Код - $this->Code";
		}
	}

	// Интерфейс 1.
	interface CarInterface 
	{
		public function getBrand();
	}

	// Класс 1. Машина.
	class CarClass extends SuperClass implements CarInterface {
	//	private $Code;		// Код
		private $carBrand; // Марка
		public $carColor;  // Цвет
		public function getBrand()
		{
			echo $this->carBrand;
		}
		public function __construct($Brand, $nCode)
		{
			$this->carBrand = $Brand;
			$this->Code = $nCode;
		}
	}

	$car1 = new CarClass('Ford', 123);
	echo $car1->getBrand().'<br>';
	$car1->carColor = 'Белый';
	echo $car1->carColor.'<br>';
	$car2 = new CarClass('Kia', 234);
	'<pre>';
	print_r($car2);
	'</pre>';
	echo '<br>';
	$car1->getCode();	
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Интерфейс 2.
	interface TVInterface 
	{
		public function getType();
		public function setType($newType);
		public function getSize();
	}

	// Класс 2. Телевизор. 
	class TVClass extends SuperClass implements TVInterface {
	//	private $Code;			// Код
		private $type = 'ЖК';   // Тип
		private $size;			// Размер диагонали
		public function getType() 
		{
			echo $this->type;
		}
		public function setType($newType)
		{
			$this->type = $newType;
		}
		public function getSize()
		{
			echo $this->size;
		}
		public function __construct($nCode, $initSize = 48)
		{
			$this->size = $initSize;
			$this->Code = $nCode;
		} 
	}

	$tv1 = new TVClass(345);
	echo $tv1->getSize().'<br>';
	echo $tv1->getType().'<br>';
	$tv2 = $tv1;
	echo $tv2->getType().'<br>';
	$tv2->setType('Плазменный');
	echo ' tv2 ' . $tv2->getType().'<br>';
	echo ' tv1 ' . $tv1->getType().'<br>';
	echo '<br>';
	$tv1->getCode();
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Интерфейс 3.
	interface PencilInterface 
	{
		public function getPencilProperties();
	}

	// Класс 3. Шариковая ручка.
	class PencilClass extends SuperClass implements PencilInterface {
	//	private $Code;			// Код
		private $colorInk;		// Цвет чернил
		private $pencilBrand;	// Марка
		public function __construct($Brand, $nCode, $Ink = 'Синяя')
		{
			$this->colorInk = $Ink;
			$this->pencilBrand = $Brand;
			$this->Code = $nCode;
		}
		public function getPencilProperties()
		{
			echo "$this->colorInk". " - " . "$this->pencilBrand";
		}
		// public function clon($parentPencil)
		// {
		// 	$newPencil = new PencilClass('-','-');
		// 	$newPencil->$colorInk = $parentPencil->$colorInk;
		// 	$newPencil->$pencilBrand = $parentPencil->$pencilBrand;
		// 	return $newPencil;
		// }

	}

	$pencil1 = new PencilClass('Pilot', 567, 'Черная');
	$pencil1->getPencilProperties();
	echo '<br>';

	$pencil2 = new PencilClass('Brauberg', 678);
	$pencil2->getPencilProperties();
	echo '<br>';

	$pencil3 = new PencilClass('', 789, '');
	$pencil3->getPencilProperties();
	echo '<br>';
	// $pencil3->clon($pencil1);
	// $pencil3->getPencilProperties();
	$pencil1->getCode();
	echo '<br>';
	echo '<br>';

	//-------------------------------------------------

	// Интерфейс 4.
	interface DuckInterface 
	{
		public function getDuck();
	}

	// Класс 4. Утка.
	class DuckClass extends SuperClass implements DuckInterface {
	//	private $Code;		// Код
		private $duckColor;	// Цвет
		private $duckName;		// Имя
		public function __construct($color, $name, $nCode)
		{
			$this->duckColor = $color;
			$this->duckName = $name;
			$this->Code = $nCode;
		}
		public function getDuck()
		{
			echo "$this->duckName" . " - " . "$this->duckColor";
		}
	}

	$duck1 = new DuckClass('Черный', 'Иван Иванович', 135);
	$duck2 = new DuckClass('Серый', 'Петр Петрович', 246);
	$duck1->getDuck();
	echo '<br>';
	$duck2->getDuck();
	echo '<br>';
	$duck1->getCode();
	echo '<br>';
	echo '<br>';


	//-------------------------------------------------

	// Интерфейс 5.
	interface ProductInterface 
	{
		public function setDiscount ($discount);
		public function getPrice();
	}

	// Класс 5. Товар.
	class ProductClass extends SuperClass implements ProductInterface {
	//	private $Code;					// Код
		private $productName;			// Наименование
		private $productPrice;			// Цена
		private $productDiscount = 0;	// Скидка
		public function __construct($name, $price, $nCode)
		{
			$this->productName = $name;
			$this->productPrice = $price;
			$this->Code = $nCode;
		}
		public function setDiscount ($discount)
		{
			$this->productDiscount = $discount;
		}
		public function getPrice()
		{
			$p = $this->productPrice * (100 - $this->productDiscount) / 100;
			echo "Цена $this->productName - $p";
		}
	}

	$product1 = new ProductClass('Шкаф', 1000, 468);
	$product1->getPrice();
	echo '<br>';
	$product1->setDiscount(15);
	$product1->getPrice();
	echo '<br>';
	$product1->getCode();

?>