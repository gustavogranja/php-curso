-- SQLite

SELECT a.nome, t.numero
FROM Aluno a
INNER JOIN Curso t ON t.aluno_id = a.id;

