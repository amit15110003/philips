<!-- MAIN SLIDER -->
        <section id="demo-1" class="main-slider" data-zs-src='["<?php echo base_url(); ?>media/images/main-slider-img.jpg"]'>
      <div class="main-slider-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <div class="big-title">Philips Bakery</div>
                      <p style="font-size: 30px;">"A party without cake is just a meeting." - Julia Child</p> 
                      
                  </div>
                </div>
              </div>
            </div>
    </section>
    
    <!-- MAIN SLIDER END -->

  <!-- MAIN TOP PRODUCT -->
    <section class="top-prod-wrap">
    <div class="top-prod-types">
      <div class="container">
        <div class="row no-gutter">
          <div class="col-md-4">
            <div class="item first">
              <img src="<?php echo base_url(); ?>media/images/main_icon1.png" width="200" height="200" alt="">
              <div class="name dark"><span>Natural</span> Cake</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item second">
              <img src="<?php echo base_url(); ?>media/images/main_icon2.png" width="200" height="200" alt="">
              <div class="name"><span>Chinese</span> Burger</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item third">
              <img src="<?php echo base_url(); ?>media/images/main_icon3.png" width="200" height="200" alt="">
              <div class="name"><span>Sweet</span> Pizza</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN TOP PRODUCT END -->
  
  <!-- MAIN ABOUT -->
  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-text">
            <h2>About <span>Philips</span></h2>
            <p> <a href="#">philipsbakery.in</a>  is an online Bakery, based in Munger, Bihar.
We specialise in Freshly Baked Cakes & Gateaux among other savouries and mould them as per your desire. </p>
            <ul class="about-slogan">
              <li>
                <div class="icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">100% Fresh Baked Bread</div>
                  <p><a href="#">Philips Bakery</a> uses only the finest and freshest ingredients in all of our baked goods. </p>
                </div>
              </li>
              <li>
                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">Free Delivery</div>
                  <p><a href="#">Philips Bakery</a> offer a FREE local delivery on all cakes!*</p>
                </div>
              </li>
              <li>
                <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">High Quality Product</div>
                  <p>our philosophy is simple: create quality products using quality ingredients. <a href="#">Philips Bakery</a> use this approach not only in our cakes and pastries but in our cafe aspect as well. </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-img"><img src="<?php echo base_url(); ?>media/images/about-img.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN ABOUT END -->

  <!-- MAIN REASONS -->
  <section class="reasons parallax" style="background-image: url('<?php echo base_url(); ?>media/images/parallax.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><span>Why people</span> choose Philips Bakery</h2>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="count">10</div>
            <div class="title">Years of experience</div>
            <p class="text"><a href="#">Philips Bakery </a>have more than 10 years of experience</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="count">19</div>
            <div class="title">collection of Cakes</div>
            <p class="text"><a href="#">Philips Bakery </a> have wide collection of cakes.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="count">10</div>
            <div class="title">collection of pastries</div>
            <p class="text"><a href="#">Philips Bakery </a>have wide collection of pastries.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="count">83</div>
            <div class="title">Types of sweets</div>
            <p class="text"><a href="#">Philips Bakery </a>have wide collection of sweets. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN REASONS END -->

  <!-- MAIN SHOP -->
  <section class="popular-item">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Popular items</h2></div>
        <div class="col-md-12">
          <div class="row owl-carousel shop-slider">
          <?php foreach ($query1 as $row ) {?>
            <div class="item">
              <div class="img-wrap"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive" ></a></div>
              <a href="#" class="name"><?php echo $row->category;?></a>
              <div class="text"><?php echo $row->title;?></div>
              <div class="price">&#8377; <?php echo $row->cost;?></div>
              <a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" class="btn btn-default">View</a>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- MAIN SHOP -->
  <!-- MAIN REVIEWS -->
  <section class="main-reviews">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2><span>What our</span> clients say</h2></div>
        <div class="col-md-12">
          <div class="owl-carousel review-slider owl-theme">
              <div class="item">
                <div class="review-item">
                  <p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget<br> magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. Sed sagittis<br> sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. </p>
                  <div class="img-wrap"><img src="<?php echo base_url(); ?>media/images/review-ava.jpg" alt="" class="img-responsive" ></div>
                  <div class="name">Leona Richards</div>
                  <div class="date">1 year ago</div>
                </div>
              </div>
              <div class="item">
                <div class="review-item">
                  <p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget<br> magna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae. Sed sagittis<br> sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. </p>
                  <div class="img-wrap"><img src="<?php echo base_url(); ?>media/images/review-ava.jpg" alt=""></div>
                  <div class="name">Leona Richards</div>
                  <div class="date">1 year ago</div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN REVIEWS END -->

  