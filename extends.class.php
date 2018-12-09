<?php

class Human {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function say() {
		echo "Меня звоут ".$this->name." и ";
	}

}

class Man extends Human {

	public function beard() {
		echo "у меня ростет борода";
	}

}

class Woman extends Human {
	public function bearChildren() {
		echo "я родаю детей";
	}
}

$man = new Man("Svyat");
$man->say();
$man->beard();

echo "<br>";

$woman = new Woman("Maria");
$woman->say();
$woman->bearChildren();

/*class Animal {
	private $animal;

	public function __construct($animal) {
		$this->animal = $animal;
	}
	public function say() {
		echo "Это животное ".$this->animal." и ";
	}
}

class Dog extends Animal {
	public function breed() {
		echo "она лает.";
	}
}
class Cat extends Animal {
	public function breed() {
		echo "она мяукает.";
	}
}

$dog = new Dog("Собака");
$dog->say();
$dog->breed();

echo "<br>";

$cat = new Cat("Кошка");
$cat->say();
$cat->breed();*/

?>