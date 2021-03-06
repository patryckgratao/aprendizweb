<?php get_header(); ?>

<div id="conteudo">
    <div id="primary">
           <h3>All Posts</h3>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="blog-artigo">
    <a href="<?php the_permalink(); ?>">
        <figure class="imagem_destacada">
            <?php the_post_thumbnail(); ?>
        </figure>
    </a>

    <section class="resumo">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <p class="dados_do_post">Por <span><?php the_author_posts_link(); ?></span> - <?php the_time('j \d\e F ') ?><span class="pull-right"><i class="fa fa-comments-o"></i>  <?php comments_popup_link();?></span></p>
        <p><?php the_excerpt(); ?></p>
    </section>
</article> <!-- Fim do blog-artigo -->

<?php endwhile; ?>

<!-- Aqui vai a paginação -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php else: ?>

<h2>404 - Nothing content has found.</h2>
     <div class="page-content">
                <p><?php _e( "We couldn't find what you wanted. Try a search", 'meutema' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->
    <br>
    <img src="<?php bloginfo('template_directory'); ?>/img/404.jpg" title="404" alt="404">


<?php endif; ?>

    </div>
    </div>
    <!-- aqui vai o sidebar -->
</div> <!-- content -->

<?php get_footer(); ?> <!-- inclue o código do arquivo footer.php -->