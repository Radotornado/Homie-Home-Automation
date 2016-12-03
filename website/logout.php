<?php
session_start(); //Старт на сесия
session_destroy(); //Изчистваме сесията за да не сме логнати
header("location:index.php?msg=Successful exit"); // Препратка към login.php
?>