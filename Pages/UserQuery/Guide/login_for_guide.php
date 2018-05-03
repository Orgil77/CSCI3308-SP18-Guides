<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "Sign in")
    {
        $user = $_POST["username"];
        $psw = $_POST["PWord"];
        if($user == "" || $psw == "")
        {
            echo "<script>alert('Please enter your username and password！'); history.go(-1);</script>";
        }
        else
        {
            $conn = mysqli_connect("localhost","root","","3308project",3308);
            $sql = "select username,PWord from guide_details where username = '$_POST[username]' and PWord = '$_POST[PWord]'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num)
            {
              echo "<script>alert('Login successfully！');</script>";
              echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."guide.html"."\""."</script>";
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
