<?php

try {
    $db=new PDO("mysql:host=localhost;dbname=myBlog;charset=utf8","root","");
} catch (PDOException $e) {
    echo $e->getMessage();
}



?>


<!-- PhpMyAdmin hesabımın şifresi olmadığı için "root"tan sonraki "" kısmını boş bıraktım. -->