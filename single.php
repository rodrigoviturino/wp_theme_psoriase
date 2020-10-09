<?php get_header(); ?>

<section class="single-post__content">

  <div class="single-post__content__nav-title">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article class="single-post__content__article">
            <!-- ACF -->
            <figure class="thumbnail-single">
              <?php if(has_post_thumbnail()): ?>
                <a href="<?= the_permalink();?>">                                
                  <?php the_post_thumbnail("full", array("class" => "post_miniatura img-fluid")); ?>
                </a>
              <?php endif; ?>
              
              <div class="thumbnail-single-infos">
                <div class="breadcrumbs">
                  <ul>
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <span>Page Atual</span>
                    </li>
                  </ul>
                </div>
                <div class="rede-social">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-whatsapp-square"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-share-alt-square"></i></a>
                    </li>
                  </ul>
                </div>
              </div>

            </figure>
            <!-- end ACF -->

            <?php the_content(); ?>

            <blockquote>
              <p><strong>Lembre-se</strong>: leve suas perguntas ou tópicos principais anotados em um papel ou no celular, assim você não se esquecerá das conversas mais importantes! Sempre que possível, peça a um amigo ou familiar que te acompanhe na consulta. Essa pessoa pode te dar o suporte necessário e anotar pontos importantes para você, por exemplo.</p>
              <p>Agora, se você ainda não faz acompanhamento da psoríase com um(a) especialista, <a href="#">encontre aqui um(a) dermatologista!</a></p>
            </blockquote>

            <div class="single-post__content__article__reference">
              <ul>
                <li>
                  <strong>Referências</strong>
                  <ol>
                    <li>
                      <p>
                        Testando Conteudo <a href="#">lorem lorem lorem</a>
                      </p>
                    </li>
                    <li>
                      <p>
                        Testando Conteudo <a href="#">lorem lorem lorem</a>
                      </p>
                    </li>
                    <li>
                      <p>
                        Testando Conteudo <a href="#">lorem lorem lorem</a>
                      </p>
                    </li>
                  </ol>
                </li>
              </ul>
            </div>


            <div class="single-post__content__article__postsRelateds">
              <ul>
                <li>
                  <a href="#">Anterior</a>
                </li>
                <li>
                  <a href="#">Próximo</a>
                </li>
              </ul>
            </div>

          </article>
        <?php endwhile; else : endif; ?>
      </div>

      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>