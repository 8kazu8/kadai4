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
     <?php wp_head(); ?>
  </head>

  <body>
    <header id="header">
        <nav id="nav">
            <div class="inner">
                <p>
                    有限会社<br>
                    <b>テスト</b>
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
        <div class="visual">
            <h1 class="visual-title">
                テストとテスト<br>
                正確なお仕事ともに
            </h1>
            <P class="visual-text">テキストテキストテキストテキストテキストテキストテキスト</P>
        </div>
    </header>