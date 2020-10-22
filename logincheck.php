<?php
session_start();

$con = mysqli_connect('localhost', 'root');

/*if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}*/

$db = mysqli_select_db($con,'youtubeadmin');
if(isset($_POST['submit'])){
    $userphp = $_POST['user'];      /* This user is from html */
    $passphp = $_POST['pass'];      /* This pass is from html */
    
    $sqlvar = "select * from admintable where user = '$userphp' and pass = '$passphp' "; /* This user and pass is from database */
    $query = mysqli_query($con,$sqlvar);
    $row = mysqli_num_rows($query);
        if($row == 1){
            $_SESSION['user']= $userphp;
            header('location:dashboard.php');
        }
        else{
            header('location:invalid_credentials.html');
            /*header('location:index.php');*/
        }
    
}

?>