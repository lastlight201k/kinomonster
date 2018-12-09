<?php

	interface Say {
		public function say();
	}

	abstract class Human implements Say {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}
	}

	class Man extends Human {
		public function __construct($name) {
			parent::__construct($name);
		}

		public function beard() {
			echo "у меня ростет борода";
		}

		public function say() {
			echo "у меня мужсктй голос, меня зовут ".$this->getName()." и ";
		}
	}

	class Woman extends Human {
		public function __construct($name) {
			parent::__construct($name);	
		}

		public function bearChildren() {
			echo "я рожаю детей";
		}

		public function say() {
			echo "у меня женский голос, меня зовут ".$this->getName()." и ";
		}
	}

	$man = new Man("Svyat");
	$man->say();
	$man->beard();

	echo "<br>";

	$woman = new Woman("Maria");
	$woman->say();
	$woman->bearChildren();

?>