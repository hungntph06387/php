<?php

try{
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=crud_db', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
$statement = $conn->prepare('SELECT * FROM products ORDER BY price ASC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


$name = $_POST['name'];
echo $name;

?>
