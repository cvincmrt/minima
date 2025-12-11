<?php

class Database
{

    private function db_connect(){
        try {
            $string = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";";
            $db = new PDO($string, DB_USER, DB_PASS);
            
            return $db;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function read($query, $data = []){

        try {
             $DB = $this->db_connect();
            $stm = $DB->prepare($query);
            $stm->execute($data);

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            echo "je to v prdeli";
        }



       

    }

    
}