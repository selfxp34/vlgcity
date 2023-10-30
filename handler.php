<!DOCTYPE html>

<html>
  <head>
      <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94447058, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94447058" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <title>Волгоград</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta
      name="description"
      content="Волгоград, крупный и динамично развивающийся город на юге России, расположенный на берегу Волги."
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="assets/css/noscript.css"
    /></noscript>
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/history.html">История</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form">Написать</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Достопримечательности
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://vlgcity.ru/mk.html">Мамаев Курган</a></li>
              <li><a class="dropdown-item" href="https://vlgcity.ru/dp">Дом Павлова и мельница Гергардта
</a></li>
              <li>
                <a class="dropdown-item" href="https://vlgcity.ru/ag">Аллея героев</a>
              </li>
                <li>
                <a class="dropdown-item" href="https://vlgcity.ru/vp">Волгоградский планетарий</a>
              </li>
                   <li>
                <a class="dropdown-item" href="https://vlgcity.ru/sarepta">Музей-заповедник "Старая Сарепта"</a>
                        <a class="dropdown-item" href="https://vlgcity.ru/lenin">Памятник Ленину </a>
                               <a class="dropdown-item" href="https://vlgcity.ru/calancha">Каланча царицынской пожарной команды</a>
                               <a class="dropdown-item" href="https://vlgcity.ru/elevator">Волгоградский элеватор</a>
                                <a class="dropdown-item" href="https://vlgcity.ru/vokzal">Здание железнодорожного вокзала</a>
                                          <a class="dropdown-item" href="https://vlgcity.ru/teatr">Волгоградский новый экспериментальный театр</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <h1>Volgograd</h1>
    </header>

<?php
         $name = $_POST['name'];
         $email = $_POST['email'];
         $text = $_POST['text'];
          $name = htmlspecialchars($name);
         $email = htmlspecialchars($email);
         $text = htmlspecialchars($text);
         $name = urldecode($name);
         $email = urldecode($email);
         $text =  urldecode($text);
         $name = trim($name);
         $email = trim($email);
         $text = trim($text);
         //echo $fio;
         //echo "<br>";
         //echo $email;
         if (mail("sopnev@mail.ru", "Заказ с сайта", "ФИО:".$name.". Сообщение: .$text  E-mail: ".$email ,"From: vlg.ru@vlgcity.ru , \r\n")   )
          {     echo '		<section id="banner">
			<header>
				<h2></h2>
			</header>
		<div class="container">	<p class="textc">Сообщение успешно отравлено!</p>
			<footer class="textc"><a href="index"><input type="submit" value="На главную"></a></footer></div></style>
		</section>'; 
         } else {
             echo "при отправке сообщения возникли ошибки";
         }?>
         
         
             <footer  id="footer2">
      <!-- Icons -->

      <!-- Menu -->
      <ul class="menu ">
        <li>&copy; selfxp</li>
        <li>from:Volgograd</li>
      </ul>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>