<?php 
class League{
    private $teams = [];
    private $name = "";
    function __construct($name,$teams) {
        $this->name = $name;
        $this->teams = $teams;

    }

    public function getTeams(){
        return $this->teams;
    }
    public function getName(){
        return $this->name;
    }
}


?>