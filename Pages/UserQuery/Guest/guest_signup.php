<?php
 if(isset($_POST["submit"]) && $_POST["submit"] == "Sign up")
 {
 $user = $_POST["username"];
 $psw = $_POST["PWord"];
 $psw_confirm = $_POST["confirm"];
 if($user == "" || $psw == "" || $psw_confirm == "")
 {
 echo "<script>alert('Enter your username and password！'); history.go(-1);</script>";
 }
 else
 {
 if($psw == $psw_confirm)
 {
 $conn = mysqli_connect("localhost","root","","3308project",3308);
 $sql = "select username from user_details where username = '$_POST[username]'";
 $result = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($result);
 if($num)
 {
 echo "<script>alert('Already exist user!'); history.go(-1);</script>";
 }
 else
 {
 $sql_insert = "insert into user_details (username,PWord) values('$_POST[username]','$_POST[PWord]')";
 $res_insert = mysqli_query($conn, $sql_insert);
 if($res_insert)
 {
 echo "<script>alert('Sign up successfully！');</script>";
 echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."guest.html"."\""."</script>";
 }
 else
 {
 echo "<script>alert('Server Busy！'); history.go(-1);</script>";
 }
 }
 }
 else if($psw != $psw_confirm)
 {
 echo "<script>alert('Passwords have to be the same!'); history.go(-1);</script>";
 }
 }
 }
 else
 {
 echo "<script>alert('Fail！'); history.go(-1);</script>";
 }
 ?>
