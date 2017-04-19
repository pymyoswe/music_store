<?php

class ShowVideo{

    public function __construct()
    {
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=MusicStore','root','root');
        }catch (PDOException $e){
            die("Connection fail");
        }

    }

    public function showVideoNameList(){

        return $this->db->query("SELECT * FROM Videos");
    }

}
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/6/17
 * Time: 6:47 AM
 */