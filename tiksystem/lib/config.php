<?php

include('init.php');

$sql = "CREATE TABLE IF NOT EXISTS client 

(
    client_id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    phone varchar(14) unique,
    email varchar(255) unique,
    password varchar(255),
    state int(11)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "sucss create client";
} else {
    echo "err";
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$sql = "CREATE TABLE IF NOT EXISTS employee 

(
    employee_id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    phone varchar(14) unique,
    email varchar(255) unique,
    department_id int(11),
    manager_id int(11),
    user_type int(11),
    state int(11),
    password varchar(255)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "<br>sucss create employee";
} else {
    echo "err";
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



$sql = "CREATE TABLE IF NOT EXISTS department 

(
    client_id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    phone varchar(14),
    email varchar(255),
    password varchar(255)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "<br>sucss create department";
} else {
    echo "err";
}


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



$sql = "CREATE TABLE IF NOT EXISTS manager 

(
    employee_id int(11) REFERENCES employee(employee_id),
    department_id varchar(255)  REFERENCES department(department_id),
    name varchar(255)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "<br>sucss create manager";
} else {
    echo "err";
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



$sql = "CREATE TABLE IF NOT EXISTS tickets 

(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    uniqid varchar(255) unique,
    user int(11),
    title varchar(255),
    msg text,
    department_id int(11),
    last_replay int(11),
    resolved int(11),
    date varchar(255),
    assigned_to varchar(255)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "<br>sucss create tickets";
} else {
    echo "err";
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



$sql = "CREATE TABLE IF NOT EXISTS tickets_replies 

(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    user int(11),
    text text,
    ticket_id text,
    date varchar(255)
)
";

$go = mysqli_query($conn, $sql);
if ($go) {
    echo "<br>sucss create tickets_replies";
} else {
    echo "err";
}
