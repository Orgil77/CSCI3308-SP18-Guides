<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "Login")
    {
        $user = $_POST["username"];
        $psw = $_POST["password"];
        if($user == "" || $psw == "")
        {
            echo "<script>alert('Please enter your username and password！'); history.go(-1);</script>";
        }
        else
        {
            $conn = mysql_connect("localhost","root","");
            $sql = "select username,password from user_details where username = '$_POST[username]' and password = '$_POST[password]'";
            $result = mysql_query($conn,$sql);
            $num = mysql_num_rows($result);
            if($num)
            {
              echo "<script>alert('Login successfully！');</script>";
              echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."Homepage.html"."\""."</script>";
              $row = mysql_fetch_array($result);  
              echo $row[0];
            }
            else
            {
                echo "<script>alert('Invalid username or password！');history.go(-1);</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Submission Not Complete！'); history.go(-1);</script>";
    }

?>
