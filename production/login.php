<?php
    session_start();
    include 'database.php';
     
    if (isset($_POST['username'])){
         
        $username = $_POST['username'];
        $password = $_POST['password'];
     
        $sql = "select * from employee where employeeuser='".$username."' and employeepassword='".$password."'";
        $query = mysqli_query($db,$sql) or die (mysql_error());
     
        // pengecekan query valid atau tidak
        if($query){
            $row = mysqli_num_rows($query);
             
            // jika $row > 0 atau username dan password ditemukan
            if($row==1){
                $_SESSION['isLoggedIn']=1;
                $_SESSION['username']=$username;
                header("location: antrian.php");
            }else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Username atau Password salah, silahkan login ulang.");';
                
                echo 'window.location.href = "login.html";';
                echo '</script>';
            }
        }
    }
?>