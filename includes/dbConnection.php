<?php
class dbConnection{
    private $connection;

    private $db_type;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;
    
    public function __construct($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name){
       $this->db_type = $db_type;
         $this->db_host = $db_host;
    // $this->db_port = $db_port;
         $this->db_user = $db_user;
          $this->db_pass = $db_pass;
          $this->db_name = $db_name;
          
          $this->connection($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name);
        
    }
    public function connection($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name){
        switch($db_type){
            case 'PDO':
                if($db_port<>Null){
                    $db_host .= ":" .$db_port;
                }
                try{
                    $this->connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            
                        // set the PDO error mode to exception
                        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo "Connected successfully using PDO";
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    } 
                    break;
                    case 'MYSQLI':
                        if($db_port<>Null){
                            $db_host .= ":" .$db_port;
                        }
                        $this->connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
                        return "Connected successfully using MYSQLI";
                        if($this->connection->connect_error){
                            return "Connection failed: " . $this->connection->connect_error;}
                            else{
                                return "Connected successfully using MYSQLI";
                            }
                        }
                    }


            public function insert($table, $data){
ksort($data);
$fieldDetails=NULL;
$fieldNames= implode('', array_keys($data));
$fieldValues=implode(",'",array_values($data));
$sth ="INSERT INTO $table ('$fieldNames') VALUES ('$fieldValues')";

switch($this->db_type){
    case 'PDO' :
        try{
      
            $this->connection->exec($sth);
            return TRUE;
        } catch(PDOException $e) {
            return $sth . "<br>" . $e->getMessage();
        }
        break;
    case 'MySQLi' :
        if ($this->connection->query($sth) === TRUE) {
            return TRUE;
        } else {
            return "Error: " . $sth . "<br>" . $this->connection->error;
        }
        break;
}
                        }
        }
    