<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
     <!-- about section -->
     <!-- </div> -->


  <!-- book section -->
  <section class="about_section book_section layout_padding">
    <div class="container">
      <div class="heading_container">
      <h2 style="text-align: center;">
             Book A Table
        </h2>
      </div>
      <div class="row">

        <div class="col-md-6 ">
        <h2>
        My Restaurant
        </h2>
            <div>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    North Rise shopping Village
                    Shop 7,1-7 Mariner Boulevard
                    Deception Bay , QLD 4508
                </p><br>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                    PH: +07 30483838
                    </span><br>
                </p>
                <p>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                    info@azzurripizzaandpasta.com
                    </span>
                </p>
            </div>
            <br>
        <h2>
        Stay Connected
        </h2>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
        </div>

        <div class="col-md-6">
        <h2>
        We love to hear from you
        </h2>
        <p>Tell us about our food and share your important thoughts.your feedback is much valuable for us.</p>
          <div class="form_container">
          <?php echo do_shortcode('[contact-form-7 id="eb4d871" title="Contact form 1"]'); ?>
            <!-- <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form> -->
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!-- end book section -->


  <section class="about_section book_section layout_padding">
    <div class="container">

      <div class="row">       
        <div class="col-md-12">
        <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer(); ?>