<?php

class PlayVideo{

    public function __construct()
    {
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=MusicStore','root','root');
        }catch (PDOException $e){
            die("Connection fail");
        }

    }

    public function play($id){

        $v=$this->db->query("SELECT * FROM Videos WHERE id='$id'");
        return $v->fetch(PDO::FETCH_ASSOC);
    }

}