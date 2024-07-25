<?php 

class Menus_model 
{
    private $db;
    private $table = 'menus';

    public function __construct() {
        $this -> db = new Database;
    }

    public function getAllMenus() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}