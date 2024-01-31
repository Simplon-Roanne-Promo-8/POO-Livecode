<?php 


class Cat {

    private int $id;
    private string $name;
    private int $age;
    private string $race;
    private string $owner;



    public function __construct(string $name, int $age, string $race, string $owner)
    {
        $this->name = $name;
        $this->age = $age;
        $this->race = $race;
        $this->owner = $owner;
    }

    public function meow(){
        echo 'miaouuu';
    }

    public function info(){
        echo $this->name . " " . $this->age . " " . $this->race . " " . $this->owner;
    }

    // GETTER
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getRace(){
        return $this->race;
    }
    public function getAge(){
        return $this->age;
    }
    public function getOwner(){
        return $this->owner;
    }

    // SETTER
    
    public function setId($id){
        $this->id = $id;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setRace($race){
        $this->race = $race;
    }
    public function setOwner($owner){
        $this->owner = $owner;
    }

}
