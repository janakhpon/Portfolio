<?php include("includes/header.php") ?>

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> No 82, Ngantae Ward, Mawlamyine, Myanmar </p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">+959 792359726</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">minchanhtutoo@gmail.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website:</span> <a href="#">www.janakhpon.tech</a></p>
            </div>
          </div>
          <div class="row block-9">
          <?php display_message(); ?>




          <div class="col-md-6 pr-md-5 bg-transparent" >
           
            <?php validate_subscriber_registeration(); ?>
            <form method="post">
              <div id="mc_embed_signup_scroll" class="form-group">
               
                <div class="form-group">
                <label>Subscribe me here !</label>
                  <input type="text" class="form-control" name="subscriber_name" placeholder="Subscriber name">
                </div>

                  <div class="form-group">
                  
                  <input type="text" class="form-control" name="subscriber_email" placeholder="Subscriber email">
                   </div>

                  <div class="form-group">
                  <input type="submit" name="submit" value="Subscribe" class="btn btn-primary py-3 px-5">
                </div>
              </div>
            </form>
          </div>


            
          </div>





          <!--End mc_embed_signup-->
        </div>
      </section>


      
      <?php include("includes/footer.php") ?>