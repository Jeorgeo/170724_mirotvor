<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
 <header class="main-header">
      <div class="top-header">
      </div>
      <div class="middle-header">
        <div class="clearfix">
  <?php if ($this->countModules('headBox-left')) : ?>
          <div class="header-title-box">
               <jdoc:include type="modules" name="headBox-left"/>
          </div>
<?php endif; ?>
          <div class="header-logo-box">
            <h1>Мирохранение.
            Фонд национального становления и государственного развития</h1>
            <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $tpath; ?>/img/logo.png" width="306" height="232" alt="Мирохранение.
            Фонд национального становления и государственного развития"></a>
          </div>
          <div class="header-contacts-box">
 <?php if ($this->countModules('headBox-Lang')) : ?>
            <div class="contacts-box_lang">

              <jdoc:include type="modules" name="headBox-Lang"/>
            </div>
<?php endif; ?>
 <?php if ($this->countModules('headBox-Search')) : ?>
            <div class="contacts-box_search">

              <jdoc:include type="modules" name="headBox-Search"/>
              <span class="lens"></span>

            </div>
  <?php endif; ?>

            <div class="contacts-box_contacts">

 <a class="box_contacts-phone" href="tel:+74959884659">
                <span></span>+7 (495) 988-46-59</a>
              <a class="box_contacts-mail" href="mailto:info@fnsgr.ru">
                <span></span> info@fnsgr.ru</a>
            </div>



          </div>
        </div>
      </div>
      <div class="bottom-header">
        <nav class="main-navigation">
        <jdoc:include type="modules" name="mainmenu" />
        </nav>
      </div>
    </header>

 <main>

      <a name="***"></a>
      <!--Слайдер и боковое меню слайдера!-->
      <section class="slider">
       <?php if ($this->countModules('Slider')) : ?>
        <div class="slider-box">
        <jdoc:include type="modules" name="Slider"/>
        </div>
        </div>
        <?php endif; ?>
        <div class="slider-menu">
        <?php if ($this->countModules('slider-menu')) : ?>
          <jdoc:include type="modules" name="slider-menu"/>
           <?php endif; ?>
        </div>
        <div class="section-border">

        </div>
      </section>
      <a name="***"></a>
      <!--Суть деятельности фонда!-->
      <section class="mean">
 <?php if ($this->countModules('section_mean')) : ?>
   <jdoc:include type="modules" name="section_mean"/>

<?php endif; ?>
      </section>
      <a name="***"></a>
      <!--Приоритеты деятельности!-->
      <section class="directions">
      <?php if ($this->countModules('directions')) : ?>
        <jdoc:include type="modules" name="directions"/>

        <div class="section-border">

        </div>
        <?php endif; ?>
      </section>
      <a name="***"></a>
      <!--Стратегическая инициатива!-->
      <section class="initiative">
      <?php if ($this->countModules('initiative')) : ?>
        <jdoc:include type="modules" name="initiative"/>
        <?php endif; ?>
      </section>
      <a name="***"></a>
      <!--Метапроект(таблица)!-->
      <section class="scheme">
      <?php if ($this->countModules('scheme')) : ?>
         <jdoc:include type="modules" name="scheme"/>
        <?php endif; ?>
      </section>
      <a name="***"></a>
      <!--Прикладные проекты фонда!-->
      <section class="projects">
        <?php if ($this->countModules('projects')) : ?>
          <jdoc:include type="modules" name="projects"/>
          <?php endif; ?>
        <div class="section-border">

        </div>

      </section>
    </main>
    <footer>
      <div class="top-footer">
        <div class="footer-copy-box">
          <span>&copy; 2001-2017 ФСНГР «Мирохранение»</span>
          <p>Любое использование материалов данного
            сайта разрешено только со ссылкой на
            источник: </p>
          <a href="#">ФНСГР «Мирохранение»  -  FNSGR.RU</a>
        </div>

        <div class="footer-logo-box">
          <a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" width="306" height="232" alt="Мирохранение.
          Фонд национального становления и государственного развития"></a>
        </div>
        <div class="footer-contacts-box">
          <div class="footer-contacts-box_contacts">
            <a class="box_contacts-phone" href="tel:+74959884659">
              +7 (495) 988-46-59</a>
            <a class="box_contacts-mail" href="mailto:info@fnsgr.ru">
              info@fnsgr.ru</a>
          </div>

          <?php if ($this->countModules('user')) : ?>
             <jdoc:include type="modules" name="user"/>
          <?php endif; ?>
         <!--  <form class="footer-form" action="index.html" method="post">
            <input type="text" name="name" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit" name="submit">Вход</button>
          </form> -->

        </div>
      </div>
      <div class="section-border">

      </div>

    </footer>

  <jdoc:include type="modules" name="debug" />

  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/slider.js"></script>
</body>

</html>
