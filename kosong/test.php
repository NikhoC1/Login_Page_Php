<?php
    session_start();
    include "../function.php";
    
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);

        $koneksi = new mysqli($email, $pass);
        if ($koneksi->connect_error) {
            die("Failed : " . $koneksi->connect_error);
        }else {
            $sql = "SELECT * FROM tbllogin WHERE email='$email' AND pass ='$pass'";
            
            $result = $koneksi->query($sql);
            var_dump($result);
            die('haloo');

            if (mysqli_num_rows($result) === 1 && "POST") {
                die('haloo');
                $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row ['pass'] === $pass ) {
                    $_SESSION['email'] = $email;
                    $_SESSION['pass'] = $pass;
                    header("Location: home.php");
                    exit();
                }else {
                    header("Location: index.php?error=Incoret_email_or_pass");
                    exit();
                }

            }else {
                header("Location index.php?error=incorect_email_or_pass");
                exit();
            }
        }
        
    }else {
        header("Location: index.php");
        exit();
    }
?>