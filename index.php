<!DOCTYPE HTML>
<html>
<head>
    <title>ЛБ1</title>
    <script src="ajax.js"></script>
</head>
<h2>Лабораторна робота №3, КІУКІ-19-6, Тарасов Микола, Варіант №1 </h2>
<p><strong> Вывести расписание занятий группы </strong><select id="groups" name="groups">
        <option>Группа</option>
</p>
    <?php
        include "connection.php";
        $sqlSelect = "SELECT * FROM $db.groups";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>$cell[1]</option>";
        }
    ?>
</select>
<input type="submit" value="ok" onclick="ok1()">

<p><strong>Вывести расписание преподавателя</strong> <select name="teachers" id="teachers">
            <option>Преподаватели</option>
    </p>

    <?php
    $sqlSelect = "SELECT * FROM $db.teacher";

    foreach ($dbh->query($sqlSelect) as $cell) {
        echo "<option>$cell[1]</option>";
    } ?>

    </select>
    <input type="submit" value="ok" onclick="ok2()">

    <p><strong>Вывести расписание для аудитории</strong> <select name="auditorium" id="auditorium">
            <option>Аудитория</option>
    </p>
    <?php
    $sqlSelect = "SELECT DISTINCT auditorium FROM $db.lesson";


    foreach ($dbh->query($sqlSelect) as $cell) {
        echo "<option>$cell[0]</option>";
    }
    ?>
    </select>
    <input type="submit" value="ok"  onclick="ok3()">
<div id="result"></div>
</body>
</html>
