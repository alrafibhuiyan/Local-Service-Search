<?php

session_start();



//connect to the database

$conn = mysqli_connect('localhost','root','','lss');





if(!$conn){
    echo "error connect";
}

//if the submit button is clicked


?>