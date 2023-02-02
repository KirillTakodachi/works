SELECT * FROM `students` WHERE 1 --- Выборка всех элементов базы
SELECT `id`, `name`, `surname`, `email` FROM `students` WHERE 1 --- Выборка конкретных элементов

INSERT INTO `students`(`id`, `name`, `surname`, `email`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')---Создание нового обьекта в базе

UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`surname`='[value-3]',`email`='[value-4]' WHERE 1 ---Обновление данных в строке

DELETE FROM `students` WHERE 0 ---Удаление строки