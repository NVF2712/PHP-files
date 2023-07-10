<?php

class Person
{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi, $name, I`m " . $this->name;
    }
    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastName()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "<h3>My family: </h3><br>" .
            "My name is : " . $this->getName() .
            "<br>My surname is : " . $this->getLastname() .
            "<br> My Dad's name is : " . $this->getFather()->getName() . " " .$this->getFather()->getLastName() .
            "<br> My Mom's name is : " . $this->getMother()->getName() . " " .$this->getMother()->getLastName() .
            "<br> My paternal grandfarher's name is : " . $this->getFather()->getFather()->getName() .
            "<br> My paternal grandmother's name is : " . $this->getFather()->getMother()->getName() .
            "<br> My maternal grandfarher's name is : " . $this->getMother()->getFather()->getName() .
            "<br> My maternal grandmother's name is : " . $this->getMother()->getMother()->getName();
    }
}
$vasiliy = new Person("Vasiliy", "Fisichev", 70);
$natalya = new Person("Natalya", "Fisicheva", 70);
$georgiy = new Person("Georgiy", "Lebedev", 68);
$oktyabrina = new Person("Oktybrina", "Lebedeva", 65);
$vitaliy = new Person("Vitaliy", "Fisichev", 46, $natalya, $vasiliy);
$irina = new Person("Irina", "Lebedeva", 44, $oktyabrina, $georgiy);
$egor = new Person("Egor", "Fisichev", 24, $irina, $vitaliy);

echo $egor->getInfo();

