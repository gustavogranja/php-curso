<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Guilherme Granja',
        new DateTimeImmutable('1993-05-08')
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Geovana Granja',
        new DateTimeImmutable('1997-08-27')
    );
    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}



?>