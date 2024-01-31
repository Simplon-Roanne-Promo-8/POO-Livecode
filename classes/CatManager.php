<?php

class CatManager {

    //instance de PDO   
    private $connexion; 


    public function __construct($connexion)
    {  
        $this->connexion = $connexion;
    }

    public function addCat($cat)
    {
        $preparedRequest = $this->connexion->prepare("INSERT INTO cat (name, age, race, owner) VALUES (?,?,?,?)");
        $preparedRequest->execute([
            $cat->getName(),
            $cat->getAge(),
            $cat->getRace(),
            $cat->getOwner()
        ]);
    }

    public function getCat(){
        $preparedRequest = $this->connexion->prepare('SELECT * FROM cat');
        $preparedRequest->execute();
        $catsArray = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        
        $cats = [];

        foreach ($catsArray as $catArray) {
            $cat = new Cat($catArray['name'], $catArray['age'],$catArray['race'],$catArray['owner']);
            $cat->setId($catArray['id']);
            array_push($cats, $cat);
        }

        return $cats;
    }

}