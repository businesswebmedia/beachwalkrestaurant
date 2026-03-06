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
     
      </div>
      <div class="row">

        <div class="col-md-6 ">
        <h2>
        Azzurri Pizza & Pasta Restaurant
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
           <div class="social_link">
              <a href="" style="color: #3b5998;"> <!-- Facebook blue -->
                 <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="" style="color: #E4405F;"> <!-- Instagram pink -->
                 <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
           </div>
        </div>

        <div class="col-md-6">
        <h2 style="font-size: 3rem; font-family: bebas-neue; color: #fd7e14">
        We love to hear from you
        <h2 style="font-size: 2rem;">
        <h2 style="font-size: 2rem;"><p>Tell us about our food and share your important thoughts.your feedback is much valuable for us.</p></h2>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.683494506797!2d153.0137874743267!3d-27.197682805168785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93ef76ad12a013%3A0x377d227b01dbf789!2sAzzurri%20Pizza%20%26%20Pasta!5e0!3m2!1sen!2sin!4v1730707411168!5m2!1sen!2sin" width="1140" height="345" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer(); ?>