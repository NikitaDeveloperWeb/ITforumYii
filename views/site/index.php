<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Международный IT-FORUM';
?>
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
        <div class="header_content">
          <h2>
            XII МЕЖДУНАРОДНЫЙ IT-ФОРУМ<br />
            С УЧАСТИЕМ СТРАН БРИКС И ШОС
          </h2>
          <h2 class="typografy-left">
            15-18
            <p>
              ЯНВАРЯ<br />
              2022
            </p>
          </h2>
          <h3>XII INTERNATIONAL IT-FORUM WITH BRICS AND SCO PARTICIPATION</h3>
        </div>
        <div class="header_organization">
          <h2>ОРГАНИЗАТОРЫ</h2>
          <ul>
            <li><img src="./img/org1.png" alt="" /></li>
            <li><img src="./img/org2.png" alt="" /></li>
            <li><img src="./img/org3.png" alt="" /></li>
            <li><img src="./img/org4.png" alt="" /></li>
          </ul>
        </div>
        <a href=  <?=  Url::to(['site/registration']);?> class="link-button">Зарегистрироваться</a>
      

        <a href=<?=  Url::to(['site/auth']);?> class="link-button">Войти</a>
      </header>
      <!-- главный блок -->
      <main>
        
        <div class="spikers">
          <h2>СПИКЕРЫ 2022 ГОДА</h2>
          <ul>
            <li>
              <img src="./img/spk1.jpg" alt="" />
              <h3>Зырянова Светлана Анатольевна</h3>
              <p>Заведующая кафедрой АСиЦТ канд. тех. наук, доцент</p>
            </li>
            <li>
              <img src="./img/spk2.jpg" alt="" />
              <h3>Никоненко Сергей</h3>
              <p>Purrweb</p>
            </li>
            <li>
              <img src="./img/spk3.jpg" alt="" />
              <h3>Дюбанов Анатолий Васильевич</h3>
              <p>Министр цифрового развития и связи Новосибирской области</p>
            </li>
            <li>
              <img src="./img/spk4.jpg" alt="" />
              <h3>Разумов Денис Александрович</h3>
              <p>Технический директор ООО «Юбисофт»</p>
            </li>
          </ul>
        </div>
        <div class="forum_info">
          <h2>ЦЕЛЬ ФОРУМА <br />- продвижение и развитие IT-отрасли в регионе</h2>
          <p>
            «Цифровая экономика – это не отдельная отрасль, по сути, это основа, которая позволяет
            создавать качественно новые модели бизнеса, торговли, логистики, производства, изменяет
            формат образования, здравоохранения, госуправления, коммуникаций между людьми,
            следовательно, задает новую парадигму развития государства, экономики и всего общества».
          </p>
        </div>
        <div class="register_form">
          <h2>ФОРМА РЕГИСТРАЦИИ УЧАСТНИКА</h2>
          <p>Зарегистрируйтесь, чтобы не пропустить самое интересное</p>
          <a href=<?=  Url::to(['site/registration']);?> class="link-button">Зарегистрироваться</a>
        </div>
      </main>