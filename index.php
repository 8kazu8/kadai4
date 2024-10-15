<!DOCTYPE html>
<html lang="ja">
  <head>
     <meta charset="utf-8" />
     <title>有限会社テスト</title>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
     <?php wp_enqueue_script('jquery'); ?>
     <?php wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',array('jquery')); ?>
  </head>
  <body>
    <header id="news-header">
      <nav id="nav">
        <div class="inner">
          <p>
             <b>NEWS</b>
          </p>
        </div>
        <ul class="nav-list">
          <li class="nav-item">
             <a href="<?php echo esc_url( home_url() ); ?>">有限会社テストとは</a>
          </li>
          <li class="nav-item">
             <a href="<?php echo esc_url( home_url() ); ?>">実績紹介</a>
          </li>
          <li class="nav-item">
             <a href="<?php echo esc_url( home_url() ); ?>">テストの強み</a>
          </li>
          <li class="nav-item">
             <a href="<?php echo esc_url( home_url() ); ?>">会社案内</a>
          </li>
          <li class="nav-item">
             <a href="<?php echo esc_url( home_url('/NEWS/') ); ?>">お知らせ</a>
          </li>
          <div class="nav-item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt="CONTACT" /><br>
            <a href="<?php echo esc_url( home_url() ); ?>">CONTACT</a>
          </div>
        </ul>
      </nav>
    </header>
    <section id="content">
      <div class="news">
        <h3>投稿一覧</h3>
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
    <footer id="footer">
        <div class="contact-us">
            <div>
             <h1>CONTACT US</h1>
             <p>
                 テキストテキストテキストテキストテキストテキストテキスト <br>
                 テキストテキストテキストテキストテキスト
             </p>
             <h2>Tel.　000-0000-0000</h2>
             <h3>【営業時間】　8:00～17:00</h3>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact_bg.png"
            onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/hover.png'" 
            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/contact_bg.png'" alt="CONTACT" />
        </div>
        <div class="footer">
            <div class="footer-text">
                 <h6>テキストテキストの</h6>
                 <h1>有限会社 <span>テスト</span></h1>
                 <p>〒000-0000 　〇〇県〇〇市〇〇 8-12</p>
                 <br>
                 <p>©test All Rights Reserved.</p>
            </div>
            <div class="footer-menu">
                 <a href="<?php echo esc_url( home_url() ); ?>">HOME</a><br>
                 <a href="<?php echo esc_url( home_url() ); ?>">有限会社テストとは</a><br>
                 <a href="<?php echo esc_url( home_url() ); ?>">メニューメニュー</a>
            </div>
            <div class="footer-menu">
                 <br>
                 <a href="<?php echo esc_url( home_url() ); ?>">メニューメニュー</a><br>
                 <a href="<?php echo esc_url( home_url() ); ?>">メニューメニュー</a>
            </div>
            <div class="footer-menu">
                <br>
                <a href="<?php echo esc_url( home_url('/NEWS/') ); ?>">お知らせ</a><br>
                <a href="<?php echo esc_url( home_url() ); ?>">お問い合わせ</a>
           </div>
           <div class="f-circle">
             <a class="footer-circle" href="#">∧</a>
           </div>
        </div>
    </footer>
  </body>
</html>