<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>
     <!-- about section -->
     <!-- </div> -->

  


  <!-- food section -->

  <section class="gallery_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Gallery
        </h2>
      </div>

      <!-- <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul> -->

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="">
                </div>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="">
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt="">
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg" alt="">
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg" alt="">
                </div>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.jpg" alt="">
                </div>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/7.jpg" alt="">
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/8.jpg" alt="">
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/9.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="btn-box">
        <a href="">
          View More
        </a>
      </div> -->
    </div>
  </section>

  <!-- end food section -->


  <?php get_footer(); ?>