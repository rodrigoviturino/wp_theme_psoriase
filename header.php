<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP Novartis</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

<header class="header">
  <div class="container">
    <div class="header__wrapper">

    <div class="header__wrapper__logo">
      <a href="#">
        <img src="<?= get_template_directory_uri();?>/assets/images/logo.webp" alt="">
      </a>
    </div>


    <nav class="header__wrapper__nav" data-anima="menu" data-menu="suave">
        <!-- Button Mobile -->
        <button class="header__wrapper__nav-btnMobile"  >Menu</button>

        <button class="buttonMobile" data-menu="mobile" aria-expanded="false" aria-controls="menu"><i class="fas fa-align-center"></i></button>

 <?php 
                    if( has_nav_menu('primary-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'primary-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'header__wrapper__nav-menu'
                        ]);
                    }
                ?>

      <!-- <ul class="header__wrapper__nav-menu" data-menu="list">
        <li class="item">
          <a href="#">
            Psoriase
          </a>
          <ul class="submenu">
            <li>
              <a href="#">
              Saiba o Que é a Psoríase e Quando Ocorre?
              </a>
            </li>
          </ul>
        </li>
        <li class="item">
          <a href="#">
          Teste Online
          </a>
        </li>
        <li class="item">
          <a href="#">
          Diagnóstico e Tratamento
          </a>
        </li>
        <li class="item">
          <a href="#">
          Viva sua Pele
          </a>
        </li>
        <li class="item">
          <a href="#">
          Qualidade de Vida
          </a>
        </li>
        <li class="item">
          <a href="#">
          Encontre seu Médico Especialista
          </a>
        </li>
      </ul> -->
    </nav>

    <div class="header__wrapper__search">
        <i class="fas fa-search"></i>
    </div>

    </div>
  </div>
</header>