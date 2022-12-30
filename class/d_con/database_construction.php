<?php
require("database_connection.php");

$database = $con->query("CREATE DATABASE if not exists ATT_DB");

if ($database) {
    print("<p>database created</p>");
}

$table = $con->query("CREATE TABLE if not exists student_registration
(id int(100)not null primary key auto_increment,
fullname varchar(120)not null,
reg_no varchar(120)not null,
level varchar(120)not null,
session varchar(120)not null,
st_con varchar(120)not null,
depart varchar(120)not null,
faculty varchar(120)not null,
password varchar(120)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE='innoDB'");

if ($table) {
    print("table created");
}else {
    print("table not created");
}


$tb = $con->query("CREATE TABLE if not exists student_sign_in
(id int(100)not null primary key auto_increment,
fullname varchar(120)not null,
reg_no varchar(120)not null,
course varchar(120)not null,
depart varchar(120)not null,
faculty varchar(120)not null,
date varchar(120)not null,
time varchar(120)not null)ENGINE ='innoDB'");

?>