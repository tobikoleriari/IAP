<?php
class auth{
    public function signup($conn){
        if(isset($_POST["submit"])){
            $fullname=$_POST["fullname"];
            $email=$_POST["email"];
            $username=$_POST["username"];
            $password=$_POST["password"];

            $cols=['fullname','email','username'];
            $vals=[$fullname, $email,$username];

            $data=array_combine($cols,$vals);

            $insert=$conn->insert('users',$data);

            if($insert==true){
               header('location:login.php');
            }else{
                die($insert);
            }

    }
  } 
}
