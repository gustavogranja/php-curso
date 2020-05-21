<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo "conectei" . PHP_EOL;

$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('61', '986068981', 1), ('61', '989048081', 1);");


$createTableSql = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY, 
        name TEXT, 
        birth_date TEXT
    );

    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT, 
        student_id INTEGER, 
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
';

$pdo->exec($createTableSql);




?>