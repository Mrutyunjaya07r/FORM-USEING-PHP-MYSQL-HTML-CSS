<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="C2">
    <?php
    if(isset($_POST['submit'])){
        echo " YOUR FORM IS SUBMITTED ";

        $username=$_POST['username'];
        $password=$_POST['password'];
        echo "<br>";
        echo " HELLO ". $username . " WELCOME TO THIS SITE ";
        echo "<br>";

        if(strlen($username)<4){
            echo " YOUR USERNAME IS TOO SHORT ";
        }
        elseif(strlen($username)>32){
            echo " YOUR USERNAME IS TOO LARGE ";
        }
        else{
            echo " VALID USERNAME ";
        }
        echo "<br>";

       /* $username="root";
        $servername="localhost";
        $password="";
        $database="FORMBASE";
        */
        $conn=mysqli_connect("localhost","root","","FORMBASE");
        if(!$conn){
            echo " NOT CONNECT SUCCESSFULLY ";
        }
        else{
            echo " CONNECT SUCCESSFULLY ";
        }
        echo "<br>";


                                 //create data base
        /*$sql=" CREATE DATABASE FORMBASE";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " TABLE CREATED SUCCESSFULLY ";
        }
        else{
            echo " TABLE NOT CREATED ";
        }
        echo "<br>";
        */

                                    //create table
        /*
        $sql="CREATE TABLE `FORMTAB`(`S.NO` INT(12), `NAME OF USER` VARCHAR(15), `PASSWORD` VARCHAR(17))";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo " NOT TABLE CREATE SUCCESSFULLY ";
        }
        else{
            echo " TABLE IS  SUCCESSFULLY ";
        }
        */


        //insert data into table
        /*$sql="INSERT INTO `FORMTAB`(`S.NO`,`NAME OF USER`,`PASSWORD`) VALUES ('02','$username','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " INSERTED SUCCESSFULLY ";
        }
        else{
            echo " NOT INSERTED SUCCESSFULLY ";
        }
        */



                                //DELETE OF DATA
       /* $sql="DELETE FROM `FORMTAB` WHERE `NAME OF USER`='root'";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " DELETED SUCCESSFULLY ";
        }
        else{
            echo " NOT DELETED SUCCESSFULLY ";
        }
        */



                                  //UPDATE OF DATA
        /*
        $sql="UPDATE `FORMTAB` SET `PASSWORD`='077077' WHERE `NAME OF USER`='devika'";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " UPDATED SUCCESSFULLY ";
        }
        else{
            echo " NOT UPDATE SUCCESSFULLY ";
        }
        */


        $sql="SELECT * FROM `FORMTAB`";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        $no=1;
        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                echo $no . " hello " . $row['NAME OF USER'] . " your password is " . $row['PASSWORD'];
                echo "<br>";
                $no=$no+1;
            }
        }

    }

    ?>
    </div>
   <div class="a1"> 
   <form action="sql.php" method="post">
    <h1>Enter your username:</h1>
    <input type="text" name="username" placeholder="enter your username">
    <h1>Enter your password:</h1>
    <input type="password" name="password" placeholder="enter your password">
    <br>
    <br>
    <input type="submit" name="submit" class="s1">
</form>
</div>
</body>
</html>