<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Административная панель';
?>
      <!-- шапка -->
      <header>
        <!-- логотип в svg -->
        <div class="logo">
          <svg
            width="160"
            height="167"
            viewBox="0 0 831 528"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M0 0L349 28L564 156L201 61L0 0Z" fill="#EB8484" />
            <path
              d="M575.74 527.036L227.75 488.463L16.732 354L376.683 459.967L575.74 527.036Z"
              fill="#EB8484"
            />
            <path d="M286 83L348 97V465L286 456V83Z" fill="#EB8484" />
            <path d="M431.5 156L755.5 169.5L831 216.5H377L431.5 156Z" fill="#EB8484" />
            <path d="M580.5 183L638 196L611.5 528H558.5L580.5 183Z" fill="#EB8484" />
          </svg>
          <h1><a href=<?=  Url::to(['/']);?>>Международный ИТ-ФОРУМ</a></h1>
        </div>
        <div class="header_form">
          <h2>Регистрация участника</h2>
          <form action="">
            <input type="text" placeholder="Фамилия">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Отчество">
            <input type="email" placeholder="Ваш e-mail">
            <input type="text" placeholder="Ваш телефон">
            <input type="password" name="" placeholder="Ваш пароль">
            <input type="password" name="" placeholder="Повторите пароль">
            <button type="submit">РЕГИСТРАЦИЯ</button>
          </form>
          <a href=<?=  Url::to(['site/lc']);?>>В личный кабинет</a>
        </div>

      </header>

