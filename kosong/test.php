<?php
    session_start();
    include "../function.php";
   if (isset($_POST['Username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        $Username = validate($_POST['Username']);
        $password = validate($_POST['password']);
        
        if (empty($Username)) {
            header("Location: index.php?error=Email_atau_Password_salah");
            exit();
        }elseif (empty($password)) {
            header("Location: index.php?Password Required");
            exit();
        }else{
            $sql = "SELECT * FROM tbllogin WHERE Username= 'Username' AND password='password'";
            
            $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['Username'] === $Username && $row['password'] === $password) {
                        $_SESSION['Username'] = $row['Username'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['idLogin'] = $row['idLogin'];
                        header("Location: home.php");
                        exit();
                    }else{
                        header("Location: index.php?error=Email_atau_Password_salah");
                        exit();
                    }
                }else{
                    header("Location: index.php?error=Email_atau_Password_salah");
                    exit();
                }
            }
   }else{
        header("Location: index.php");
        exit();
   }