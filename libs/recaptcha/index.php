<?php
// https://www.google.com/recaptcha/admin
//Домен stor.loftschool
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form action="send.php" method="post">
    Имя:<input type="text" name="name"><br>
    E-mail:<input type="text" name="email"><br>
    Content
    <textarea name="content" id="" cols="30" rows="10">

    </textarea><br>

    <div class="g-recaptcha" data-sitekey="6LcMqhoTAAAAANkoVYs2ovAOissaMYGr4a3PjzQj"></div>

    <input type="submit">
</form>
</body>
</html>