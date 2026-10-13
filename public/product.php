<?php 
require_once 'db.php'; 
$product = null;

if (isset($_GET['id'])) { 
    $id = $conn->real_escape_string($_GET['id']); 
    $sql = "SELECT * FROM products WHERE id = $id"; 
    $result = $conn->query($sql); 
    $product = $result->fetch_assoc(); 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="UTF-8">
    <title>Карточка товара</title> 
</head> 
<body> 
    <a href="catalog.php">Назад к каталогу</a> 
    <hr> 
    <?php if ($product): ?> 
        <h1><?php echo $product['title']; ?></h1> 
        <p><b>ID товара:</b> <?php echo $product['id']; ?></p> 
        <p><b>Название:</b> <?php echo $product['title']; ?></p> 
        <p><b>Цена:</b> <?php echo $product['price']; ?> руб.</p> 
    <?php else: ?> 
        <p>Товар не найден!!</p> 
    <?php endif; ?> 
</body> 
</html>