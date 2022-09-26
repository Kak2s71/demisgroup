<?php

require_once './connect/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="right-side">
          <div class="topic-text">Отправьте нам сообщение</div>
          <p>
            Заказать коммерческое предложение
          </p>
          <form action="send_mail.php" action="./vendor/create.php" name="form" method="POST">
            
<div class="placeholder-form">
    <div class="placeholder-container">
      <input
      type="name"
      placeholder=" "
      name="name"
      id="name" 
      data-reg="^[а-яА-ЯёЁa-zA-Z]+ [а-яА-ЯёЁa-zA-Z]+ ?[а-яА-ЯёЁa-zA-Z]+$"
    />
    <label for="name">Ваше ФИО</label>
    </div>
    <div class="placeholder-container">
      <input
      type="text"
      placeholder=" "
      name="adress"
      id="adress" 
      data-reg=""
    />
    <label for="email">Введите адрес</label>
    </div>
    <div class="placeholder-container">
      <input
      type="text"
      placeholder=" "
      name="phone"
      id="phone" 
      data-reg="^((\+7|7|8)+([0-9]){10})$"
    />
    <label for="phone">Введите телефон</label>
    </div>      
    <div class="placeholder-container">
      <input
      type="text"
      placeholder=" "
      name="email"
      id="email" 
      data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$"
    />
    <label for="email">Введите E-mail</label>
    </div>
</div>
            <div class="button">
              <input type="submit" id="button" id="submit" name="formSubmit" value="Отправить"/>
            </div>
            <p id="warn"></p>
          </form>
          <div class="news-view_footer_body">
                            <a href="../index.php" class="news-view_footer_body_item">На главную</a>
                        </div>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
  </body>
</html>