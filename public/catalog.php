<?php  
require_once 'db.php';  
$sql = "SELECT * FROM products"; 
$result = $conn->query($sql); 
?> 
<!DOCTYPE html>   
<html> 
<head> 
    <title>Каталог товаров</title> 
</head> 
<body> 
    <h1>Каталог товаров</h1> 
    <a href="add_product.php"><b>Добавить новый товар</b></a> 
    <hr> 
    <ul> 
        <?php 
        while($row = $result->fetch_assoc()) { 
            echo "<li>"; 
            echo "<a href='product.php?id=" . $row['id'] . "'>" . $row['title'] . " (Цена: " . $row['price'] . " руб.)</a>"; 
            echo "</li>"; 
        } 
        ?> 
    </ul> 
</body> 
</html>