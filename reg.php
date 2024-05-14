<?php
        session_start();


            include("db.php");

            if($_SERVER['REQUEST_METHOD']=="POST")
            {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpaswsword = $_POST['confirmpassword'];

            if(!empty($gmail)&& !empty($password) && !is_numeric($gmail))

                {
                    $query = "INSERT INTO person_login_info (First_name,Last_name,Email_id,Password,Confirm_P) VALUES (?,?,?,?,?) ";

                    mysqli_query($con,$query);

                    echo "<script type='text/javascript'> alert('Successfully Register')</script> ";

                }
                else{
                    echo "<script type='text/javascript'> alert('Please enter some valid information')</script> ";
                }


            }
          
           $mysqli = require __DIR__ . "/process.php";
           
           
            $sql = "INSERT INTO person_login_info (First_name,Last_name,Email_id,Password,Confirm_P) VALUES (?,?,?,?,?) ";
            $stmt = $mysqli->stmt_init();
            
            if( ! $stmt->prepare($sql)){
                die("SQL Error: " . $mysqli->error);
            }
            
                $stmt->bind_param("sssss",$firstname, $lastname,$email,$password,$cpaswsword);
                $stmt->execute();


                echo "Registered successfully";

               
            
           
        

    
        ?>


