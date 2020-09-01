<?php

//  用于测试数库能否连接
$servername = "mysql"; # mysql 指向msqyl服务容器
$username = "root";
$password = "12345678";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// 打印php信息
phpinfo();
