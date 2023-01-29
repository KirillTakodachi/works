<?php 
	class Person {
		public $name;
		public $age;
		public function sayHello($name){
			echo "Hi I`m ". $this->name." and I`m old ". $this->sayAge() ;
		}
		public function setName($name){
		   	 $this->name = $name;
		}
		public function setAge($age){
			$this->age = $age;
		}
		public function sayAge(){
			return $this->age;
		}
	}

	$myPerson = new Person;
	$myPerson2 = new Person;

	$myPerson->setName("Rahim");
	$myPerson->setAge(14);

	// $myPerson->setName("Rahim") ;
	// $myPerson2->setName("Alisa") ;
	// $myPerson->setAge("20"); //Rahim
	// $myPerson2->setAge("26");//Alisa

	// echo $myPerson->name;//Rahim
	// echo $myPerson->age;//Rahim age

	// echo $myPerson2->name;//Alisa
	// echo $myPerson2->age;//Alisa age
	echo $myPerson->sayHello();

?>