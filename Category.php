<?php

// * création de la classe
class Category{

    // * création des attributs
    private string $name;
    private int $id_category;

    // * création des getters
    /**
     * retourne la valeur de name
     * @return string
     */
    public function get_name(): string{
        return $this->name;
    }
    /**
     * retourne la valeur de id_category
     * @return int
     */
    public function get_id_category(): int{
        return $this->id_category;
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
    /**
     * modifies la valeur de id_category
     * @param int $id_category
     * 
     * @return [type]
     */
    public function set_id_category(int $id_category){
        $this->id_category = $id_category;
    }

    // * création de la méthode magique construct
    function __construct(string $name, int $id_category){
        $this->name = $name;
        $this->id_category = $id_category;
    }

}