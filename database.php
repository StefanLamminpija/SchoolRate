<?php

// Настройки подключения к базе данных
$serverName = "localhost"; // Обычно это 'localhost'
$username = "ваш_пользователь"; // Ваше имя пользователя MySQL
$password = "ваш_пароль"; // Ваш пароль MySQL
$dbName = "ваша_база_данных"; // Имя вашей базы данных

try {
    // Создание подключения
    $connection = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $username, $password);
    
    // Установка режима обработки ошибок
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Подключение успешно!";
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}

// Пример функции для вставки данных
function insertData($username, $password) {
    global $connection; // Используем глобальную переменную соединения

    try {
        // Подготовка SQL-запроса
        $stmt = $connection->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        
        // Привязка параметров
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        // Выполнение запроса
        $stmt->execute();
        
        echo "Данные успешно вставлены!";
    } catch (PDOException $e) {
        echo "Ошибка вставки данных: " . $e->getMessage();
    }
}

// Пример использования функции insertData
// insertData('testUser', 'testPassword'); // Раскомментируйте для тестирования

?>