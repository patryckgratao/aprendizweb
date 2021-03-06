<?php get_header(); ?>
<div id="conteudo">
    <div id="primary">
<h3 class="nome_autor">
    <!-- Se a pagina se refere a uma categoria -->
    <?php if (is_category()) { single_cat_title(); } ?>

    <!-- Se a pagina se refere a uma tag -->
    <?php if (is_tag()) {  single_tag_title(); } ?>

    <!-- Se a pagina se refere a um author -->
    <?php if (is_author()) {  echo "Author: ". get_the_author(); } ?>
</h3>

    <hr>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<article class="blog-artigo">
    <a href="<?php the_permalink(); ?>">
        <figure class="imagem_destacada">
            <?php the_post_thumbnail(); ?>
        </figure>
    </a>
            <section class="resumo">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <p class="dados_do_post"> By <?php the_author_posts_link(); ?> - <?php the_time('j \d\e F ') ?><span class="pull-right">//  <?php comments_popup_link();?></span></p>
                <p><?php the_excerpt(); ?></p>
            </section>
</article>

<?php endwhile; ?>

<!-- Aqui vai a paginação -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php else: ?>

<h2>Nothing Found</h2>
    <p>404</p>
    <p>Sorry, no found posts.</p>

<?php endif; ?>

    </div>

</div> <!-- content -->

<?php get_footer(); ?> <!-- inclue o código do arquivo footer.php -->