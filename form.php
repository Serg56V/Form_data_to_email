<html>
<head>
  <title>Форма заявки с сайта</title>
</head>
<body>
  <form action="send.php" method="post">
    <input placeholder="Ваше имя" type="text" name="fio" required>
    <input placeholder="Ваш e-mail" type="email" name="email">
    <textarea name="message" cols="50" rows="10" placeholder="Напишите ваше сообщение сюда..."></textarea>
    <input type="submit" value="Отправить">
  </form> 
</body>
</html>