<?php 
   session_start();

   $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud_gabrielle24feb2024'
   ) or die(mysqli_error($mysqli));
?>