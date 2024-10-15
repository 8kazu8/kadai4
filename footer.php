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
    <?php wp_footer(); ?>
  </body>
</html>