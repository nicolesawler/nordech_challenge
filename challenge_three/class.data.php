<?php
class DATA
{
    /** @var object $pdo Copy of PDO connection */
    private $db;
    /** @var string prints light user msg for errors */
    public $msg;
    /** @var string prints error message for user - DB related */
    public $error;
    /** @var string DB table used in this class */
    private $table;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
      $this->table = 'data';
    }
    

    
 
    public function getStuff($id) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = ? limit 1");
        $stmt->execute([$id]);
        $Info = $stmt->fetch(PDO::FETCH_ASSOC);
          
        if($stmt->rowCount() > 0){
            return $Info;
        }else{
            return false;
        }
    }
    
  

    

}//class
