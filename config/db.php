<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

