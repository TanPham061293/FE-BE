<?php
class Controller_Model{
    private $connect  ='';
    private $database ='';
    private $table    ='';
    public function __construct(){
        $this->connect  = mysqli_connect('localhost','root','');
        $this->table    ='table1';
        $this->database ='joke'; 
        mysqli_select_db($this->connect, $this->database);
    }
   
    public function resultQuery($position = null, $count= null){
        $query  = $this->createQuerySelect($position,$count);
        $result = mysqli_query($this->connect, $query);
        $arr    =array();
        while ($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }
        return $arr;
    }
    public function createQuerySelect($position = null, $count= null){
        $query='';
        if ($position == null && $count == null){
            $query = "SELECT COUNT(`id`) AS `count` FROM `$this->table`";
        }else {
            $query = "SELECT * FROM `$this->table` LIMIT $position, $count";
        }  
        return $query;
    } 
    public function updateDatabase($data,$where){
        $query = "UPDATE `$this->table` SET $data WHERE $where ";
        mysqli_query($this->connect, $query);
    } 
}