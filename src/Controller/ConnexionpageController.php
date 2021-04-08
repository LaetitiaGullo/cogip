<?php
require_once "./Model/ConnexionpageManager.php";


class ConnexionpageController
{
    public function render(array $GET, array $POST)
    {
        $connexion = new ConnexionManager();

        function verifyInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $success = true;
            $username = verifyInput($_POST["username"]);
            $password = verifyInput($_POST["pass"]);
            $data = $connexion->verifyUsername($username);


            if(!isset($username) || empty($username)){
                $success = false;
                echo "Please enter your email address";
            }

            if(!isset($password) || empty($password)){
                $success = false;
                echo "Please enter your password";
            }

            
            if($data) {
                if(password_verify($password, $data["pass"])){
                    $success = true;
                    echo "success";                    
                } else {
                    $success = false;
                    echo "Invalid username and/or password";                
                }
            } else {
                $success = false;
                echo "Invalid username and/or password";  
            }

            // if (/*$data["username"] ||*/ !password_verify($_POST["pass"], $data["pass"])){
            //     //$success = false;
            //     echo "Invalid username and/or password";
            // }

            // if ($data["username"] && (password_verify($_POST["pass"], $data["pass"]))){
            //     $success = true;
            //     echo "success";
            // }
        }
        
        require "./View/connexionpage.php";
    }
}


// function verifyInput($var)
// {
//     $var = trim($var);
//     $var = stripslashes($var);
//     $var = htmlspecialchars($var);
//     return $var;
// }

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     $succes = true;
//     $username = verifyInput($_POST["username"]);
//     $password = verifyInput($_POST["password"]);

//     if(empty($username)) {
//         echo $usernameErr = "Please enter a username";
//         $succes = false;
//     }
//     if(empty($password)) {
//         echo $passwordErr = "Please enter a password";
//         $succes = false;
//     }

//     $correctPass = password_verify($_POST["pass"], $result["pass"]);
//     if (!$result)
//     {
//         echo "Incorrect username and/or password";
//     }
//     else
//     {
//         if ($correctPass) {
//             session_start();
//             $_SESSION["username"] = $username;
//             echo "You are logged in";
//         }
//         else {
//             echo "Incorrect username and/or password";
//         }
//     }

// }