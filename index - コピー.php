<?php get_header(); ?>
<section id="content">
    <div class="news">
      <h1>NEWS</h1>
      <hr>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="mb-3" id="post-meta">
            <p>作成日時：<?php echo get_the_date(); ?></p>
            <?php the_content(); ?>
          </div>
          <hr>
      <?php
        endwhile;
      endif;
      ?>
    </div>
</section>
<?php get_footer(); ?>