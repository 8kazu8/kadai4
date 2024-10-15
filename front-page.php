<?php get_header(); ?>

    <section id="content">
     <div class="about">
         <h1>ABOUT</h1>
         <h4>皆様の思いを「カタチ」にする</h4>
         <p>
             ●●県〇〇市の有限会社 テストでは、テキストテキストなどへのテキストをはじめ、<br>
             テキストテキストを行っており、テキスト用からテキスト用途まで、<br>
             幅広いニーズに確かな技術と品質でお応えしております。<br> 
             お気軽に当社へご相談ください。<br>
             お客様のご希望に添えるよう、最大限ご協力させていただきます。
         </p>
     </div>
     <div class="product">
         <div class="product-text">
             <h1>PRODUCT</h1>
             <p>
                 テキストテキストテキスト<br>
                 テキストテキストテキストテキストテキストテキストテキストテキストテキスト
             </p>
         </div>
         <div class="product-img">
             <img src="<?php echo get_template_directory_uri(); ?>/images/product_blue.png" alt="PRODUCT" />
             <img src="<?php echo get_template_directory_uri(); ?>/images/produce_yellow.png" alt="PRODUCT" />
             <img src="<?php echo get_template_directory_uri(); ?>/images/product_green.png" alt="PRODUCT" />
         </div>
         <div class="btn-product">
             <h5>VIEW MORE</h5>
         </div>
     </div>
     <div class="service">
         <h1>SERVICE</h1>
         <div class="service-img">
             <ul>
                 <li>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service_white.png" alt="SERVICE" />
                     <h3>テストの強みとは</h3>
                     <P>
                         テキストテキストテキストテキストテキストテキストテキスト<br>
                         テキストテキストテキストテキスト
                     </P>
                     <div class="btn-service">
                         <h6>VIEW MORE</h6>
                     </div>
                 </li>
                 <li>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service_green.png" alt="SERVICE" />
                     <h3>テキスト、及びテキスト</h3>
                     <P>
                         テキストテキストテキストテキストテキストテキストテキスト<br>
                         テキストテキストテキストテキスト
                     </P>
                     <div class="btn-service">
                         <h6>VIEW MORE</h6>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <div class="company">
         <img src="<?php echo get_template_directory_uri(); ?>/images/company_red.png" alt="COMPANY" />
         <div class="company-text">
             <h1>COMPANY</h1>
             <h3>
                 こだわりの製法<br>
                 テキストテキストテキスト
             </h3>
             <P>
                 テキストテキストテキストテキストテキストテキストテキスト<br> 
                 テキストテキストテキスト<br> 
                 テキストテキストテキストテキストテキスト<br> 
                 テキストテキストテキスト
             </P>
             <div class="btn-company">
                  <h5>VIEW MORE</h5>
             </div>
         </div>
     </div>
     <div class="news">
         <h1>NEWS</h1>
         <div class="btn-news">
            <h5>VIEW ALL</h5>
         </div>
         <div class="news-img">
             <img src="<?php echo get_template_directory_uri(); ?>/images/news_finger.png" alt="NEWS" />
             <div>
                 <h3>2023.07.03　お知らせタイトルが入ります。お知らせタイトルが入ります。</h3>
                 <p>
                     お知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。お<br>
                     知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。…
                 </p>
             </div>
             <a class="circle" href="<?php echo esc_url( home_url('/NEWS/') ); ?>">></a>
         </div>
         <div class="news-img">
             <img src="<?php echo get_template_directory_uri(); ?>/images/news_blue.png" alt="NEWS" />
             <div>
                 <h3>2023.07.03　お知らせタイトルが入ります。お知らせタイトルが入ります。</h3>
                 <p>
                     お知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。お<br>
                     知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。…
                 </p>
             </div>
             <a class="circle" href="<?php echo esc_url( home_url('/NEWS/') ); ?>">></a>
         </div>
         <div class="news-img">
             <img src="<?php echo get_template_directory_uri(); ?>/images/news_sky.png" alt="NEWS" />
             <div>
                 <h3>2023.07.03　お知らせタイトルが入ります。お知らせタイトルが入ります。</h3>
                 <p>
                     お知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。お<br>
                     知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。…
                 </p>
             </div>
             <a class="circle" href="<?php echo esc_url( home_url('/NEWS/') ); ?>">></a>
         </div>
         <div class="news-img">
             <img src="<?php echo get_template_directory_uri(); ?>/images/news_hand.png" alt="NEWS" />
             <div>
                 <h3>2023.07.03　お知らせタイトルが入ります。お知らせタイトルが入ります。</h3>
                 <p>
                      お知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。お<br>
                      知らせの内容が入ります。お知らせの内容が入ります。お知らせの内容が入ります。…
                 </p>
             </div>
             <a class="circle" href="<?php echo esc_url( home_url('/NEWS/') ); ?>">></a>
         </div>
         <div class="news-img"></div>
     </div>
    </section>
<?php get_footer(); ?>