<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "fruit"; 

$connect = mysqli_connect($hostname, $username, $password, $database);

$query = "CREATE TABLE tbl_product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_quantity INT NOT NULL,
    product_unit VARCHAR(50) NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL,
    product_image VARCHAR(255) NOT NULL
)";


if(mysqli_query($connect, $query)){
    echo "tbl_product table created successfully";
} else {
    echo "Error creating tbl_product table: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
