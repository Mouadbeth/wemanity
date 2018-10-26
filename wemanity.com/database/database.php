<?php
require_once('config.php');
 
class Database 
{
   public $connection;

   public function __construct(){
       $this->connect();
   }

   public function connect(){
       $this->connection = new mysqli(DB_HOST,DB_USER,DB_PW,DB_DATABASE);
       if($this->connection->connect_errno){
           die('connexion echouée '.mysqli_error($this->connection));
       }
   }

   public function query($query){
       $result = mysqli_query($this->connection,$query);
       return $result;
   }

   public function escape_string($string){
       $escaped_string = mysqli_real_escape_string($this->connection,$string);
       return $escaped_string;
   }
$database = new Database();