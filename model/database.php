<?php
   $server = "localhost";
   $username = "root";
   $password =  "";
   $dbname = "restaurant";

   $connection = new mysqli($server, $username, $password, $dbname, 3306) or die("Connection failed");


