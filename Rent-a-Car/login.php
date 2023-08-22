<?php
    $email=$_POST['email'];
    $password=$_POST['password'];

    // database connecton
    $con= new mysqli("localhost","root","","test");
    if($con->connect_error)
    {
        echo "Failde to connect";
    }
    else
    {
        $query = $con->prepare("select * from registration where email = ?");
        $query->bind_param("s",$email);
        $query->execute();
        $query_result=$query->get_result();
        if($query_result->num_rows>0)
        {
            $data=$query_result->fetch_assoc();
            if($data['password']==$password) 
            {
                // header('Location: http://localhost/prototype/home2.php',true);

                session_start();
                $_SESSION['email'] = $data['email'];
                $_SESSION['contact'] = $data['contact'];

                // Set a cookie with the name "username" and the value "JohnDoe"
            	//setcookie("email", $email, time() + 3600); // expires in 1 hour


                $url = "http://localhost/prototype/home2.php?var=" . urlencode($email);
                header("Location: $url");

            }
            else
            {
                echo "pass error";
            }
               }
        else{
            echo " no email";
        }
    }

    mysqli_close($con);
?> 