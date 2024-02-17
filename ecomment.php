<?php
$a=mysqli_connect("localhost:3377","root","","ecomment");
if($a->connect_error){
    die("connection failed:".$a->connect_error);
    }
    $uname=$_POST["uname"];
    $comment=$_POST["comment"];
    $ins="insert into general(uname,comment) values ('$uname','$comment')";
    $result=mysqli_query($a,$ins);
    ?>
