<header class="article-header">

  <h1 class="article-title entry-title">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
    </a>
  </h1>
  
  <?php get_template_part ( 'partials/post-meta' ); ?>
  
</header>