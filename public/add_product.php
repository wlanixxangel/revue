<?php 
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $title = $conn->real_escape_string($_POST['prod_title']); 
    $price = $conn->real_escape_string($_POST['prod_price']);   
  
    if (!empty($title) && !empty($price)) { 
        $sql = "INSERT INTO products (title, price) VALUES ('$title', '$price')"; 
        
        if ($conn->query($sql) === TRUE) { 
            echo "<p style='color: green;'>Товар успешно добавлен!</p>"; 
        } else { 
            echo "Ошибка БД: " . $conn->error; 
        } 
    } else { 
        echo "<p style='color: red;'>Заполните все поля!</p>"; 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Добавить товар</title> 
</head> 
<body> 
    <a href="catalog.php">Назад к каталогу</a> 
    <hr> 
    <h1>Форма добавления нового товара</h1> 
    <form action="add_product.php" method="POST"> 
        <label>Название товара:</label><br> 
        <input type="text" name="prod_title" required><br><br> 
        <label>Цена (руб):</label><br> 
        <input type="number" name="prod_price" required><br><br> 
        <input type="submit" value="Сохранить товар"> 
    </form> 
</body> 
</html>