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
  <section class="reasons parallax" style="background-image: url(images/parallax.jpg);">
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
              <div class="img-wrap"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive"></a></div>
              <a href="#" class="name"><?php echo $row->category;?></a>
              <div class="text"><?php echo $row->title;?></div>
              <div class="price">&#8377; <?php echo $row->cost;?></div>
              <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN SHOP END -->

  <!-- WHERE TO BUY --
    <section class="where-buy">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><h2>Where to buy</h2></div>
          <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#usa" aria-controls="usa" role="tab" data-toggle="tab">USA</a></li>
              <li role="presentation"><a href="#germany" aria-controls="germany" role="tab" data-toggle="tab">Germany</a></li>
              <li role="presentation"><a href="#france" aria-controls="france" role="tab" data-toggle="tab">France</a></li>
              <li role="presentation"><a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">Italy</a></li>
              <li role="presentation"><a href="#portugal" aria-controls="portugal" role="tab" data-toggle="tab">Portugal</a></li>
            </ul>
            <div class="tab-content">
              <!-- TabPanel --
              <div role="tabpanel" class="tab-pane fade in active" id="usa">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TabPanel --
              <div role="tabpanel" class="tab-pane fade" id="germany">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TabPanel --
              <div role="tabpanel" class="tab-pane fade" id="france">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TabPanel --
              <div role="tabpanel" class="tab-pane fade" id="italy">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TabPanel --
              <div role="tabpanel" class="tab-pane fade" id="portugal">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 60544 New York City - MisterCoffee</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>3 Big Avenue 1422 Seattle</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="buy-item">
                      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                      <div class="info">
                        <address>481 Goodisson str. 17790-60544 Washington</address>  
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                        <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- WHERE TO BUY END -->

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
                  <div class="img-wrap"><img src="<?php echo base_url(); ?>media/images/review-ava.jpg" alt=""></div>
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

  <!-- MAIN BLOG --
  <section class="main-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Read our news</h2></div>
        <div class="col-md-3">
          <div class="main-blog-item">
            <div class="img-wrap"><a href="#"><img class="img-responsive" src="images/0.jpg" alt=""></a></div>
            <div class="info">
              <a href="#" class="name">Where our coffee is grown</a>
              <p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. </p>
            </div>
            <div class="item-info">
              <div class="left">
                <div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>January 2, 2017</div>
              </div>
              <div class="right">
                <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
                <div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-blog-item">
            <div class="img-wrap"><a href="#"><img class="img-responsive" src="images/1.jpg" alt=""></a></div>
            <div class="info">
              <a href="#" class="name">What sort of coffee to choose for every day?</a>
              <p class="text">Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. </p>
            </div>
            <div class="item-info">
              <div class="left">
                <div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>March 18, 2017</div>
              </div>
              <div class="right">
                <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
                <div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-blog-item">
            <div class="img-wrap"><a href="#"><img class="img-responsive" src="images/2.jpg" alt=""></a></div>
            <div class="info">
              <a href="#" class="name">Where our coffee is grown</a>
              <p class="text">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. </p>
            </div>
            <div class="item-info">
              <div class="left">
                <div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>January 2, 2017</div>
              </div>
              <div class="right">
                <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
                <div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-blog-item">
            <div class="img-wrap"><a href="#"><img class="img-responsive" src="images/3.jpg" alt=""></a></div>
            <div class="info">
              <a href="#" class="name">What sort of coffee to choose for every day?</a>
              <p class="text">Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. </p>
            </div>
            <div class="item-info">
              <div class="left">
                <div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>January 2, 2017</div>
              </div>
              <div class="right">
                <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
                <div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center"><a href="#" class="btn btn-default all-blog">all news</a></div>
      </div>
    </div>
  </section>
  <!-- MAIN BLOG END -->

