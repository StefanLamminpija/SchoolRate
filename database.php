<?php
// Настройки подключения к базе данных
$host = 'localhost'; // Адрес сервера
$user = 'root';      // Имя пользователя
$password = 'mysql'; // Пароль
$database = 'schoolrate'; // Имя базы данных

// Создание подключения
$conn = new mysqli($host, $user, $password, $database);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "Подключение успешно!<br>";

// Функция для добавления студента
function addStudent($name, $class_number) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO student (name, class_number) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $class_number);
    if ($stmt->execute()) {
        echo "Студент добавлен успешно.<br>";
    } else {
        echo "Ошибка при добавлении студента: " . $stmt->error . "<br>";
    }
    $stmt->close();
}

// Функция для добавления курса
function addCourse($course_name) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO course (course_name) VALUES (?)");
    $stmt->bind_param("s", $course_name);
    if ($stmt->execute()) {
        echo "Курс добавлен успешно.<br>";
    } else {
        echo "Ошибка при добавлении курса: " . $stmt->error . "<br>";
    }
    $stmt->close();
}

// Функция для добавления отзыва
function addFeedback($student_id, $course_id, $feedback_text, $rating) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO feedback (student_id, course_id, feedback, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $student_id, $course_id, $feedback_text, $rating);
    if ($stmt->execute()) {
        echo "Отзыв добавлен успешно.<br>";
    } else {
        echo "Ошибка при добавлении отзыва: " . $stmt->error . "<br>";
    }
    $stmt->close();
}

// Функция для считывания всех студентов
function getStudents() {
    global $conn;
    $result = $conn->query("SELECT * FROM student");
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Имя: " . $row["name"] . " - Класс: " . $row["class_number"] . "<br>";
        }
    } else {
        echo "Нет студентов.<br>";
    }
}

// Функция для считывания всех курсов
function getCourses() {
    global $conn;
    $result = $conn->query("SELECT * FROM course");
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Название курса: " . $row["course_name"] . "<br>";
        }
    } else {
        echo "Нет курсов.<br>";
    }
}

// Функция для считывания всех отзывов
function getFeedback() {
    global $conn;
    $result = $conn->query("SELECT f.id, s.name AS student_name, c.course_name, f.feedback, f.rating 
                             FROM feedback f 
                             JOIN student s ON f.student_id = s.id 
                             JOIN course c ON f.course_id = c.id");
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Отзыв ID: " . $row["id"] . ", Студент: " . htmlspecialchars($row["student_name"]) . ", Курс: " . 
                 htmlspecialchars($row["course_name"]) . ", Отзыв: " . 
                 htmlspecialchars($row["feedback"]) . ", Оценка: " . 
                 htmlspecialchars($row["rating"]) . "<br>";
        }
    } else {
        echo "Нет отзывов.<br>";
    }
}

// Примеры использования функций (раскомментируйте для выполнения)
// -------------------------------------------------------
// Добавление тестовых данных
// addStudent('Иван Иванов', 'TA-22');
// addCourse('Математика');
// addCourse('Физика');
// addFeedback(1, 1, 'Отличный курс!', 5); // Убедитесь, что id студента и курса существуют

// Считывание данных
// getStudents();
// getCourses();
// getFeedback();
// -------------------------------------------------------

// Закрытие соединения
$conn->close();
?>