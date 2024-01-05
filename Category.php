<?php

// * création de la classe
class Category{

    // * création des attributs
    private string $name;

    // * création des getters
    /**
     * retourne la valeur de name
     * @return string
     */
    public function get_name(): string{
        return $this->name;
    }
    // * création des setters
    /**
     * modifies la valeur de name
     * @param string $name
     * 
     * @return [type]
     */
    public function set_name(string $name){
        $this->name = $name;
    }

    // * création de la méthode magique construct
    function __construct(string $name){
        $this->name = $name;
    }
}