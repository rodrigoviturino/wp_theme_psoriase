<?php get_header(); ?>

<main class="pageHome">

    <!-- Banner Introdução -->
        <section class="introducao" style="background-image:url('<?= get_template_directory_uri();?>/assets/images/banner-introducao.webp'); background-size:cover; background-repeat:no-repeat; background-position:center center; height:480px"></section>
    <!-- end Banner Introdução -->

    <section class="pageHome__cardPost space-section">
        <!-- <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>    
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pageHome__cardPost__item">
                        <div class="thumbnail">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/thumbnail-post.webp" alt="">
                        </div>
                        <div class="info-post">
                            <h2 class="title">
                                <a href="#">Preparando Para a sua Próxima Consulta</a>
                            </h2>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi, voluptate a est eum cumque quod explicabo ipsum sit dicta nobis exercitationem eius neque? Placeat voluptas nostrum aut eos eaque?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <article class="col-md-4">
                        <div class="pageHome__cardPost__item" data-posts="item">

                            <figure class="thumbnail">
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?= the_permalink();?>">                                
                                        <?php the_post_thumbnail("full", array("class" => "post_miniatura img-fluid")); ?>
                                    </a>
                                <?php endif; ?>
                            </figure>
                        
                            <div class="info-post" data-posts="infos">
                                <h2 class="title">
                                    <a href="<?= the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                            </div>

                        </div>
                    </article>
                <?php endwhile; else : endif; ?>
            </div>
        </div>

    </section>

</main>
<?php get_footer(); ?>
