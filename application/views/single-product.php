  <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>Products</li>
            </ul>
            <h1>Products</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->

  <!-- PRODUCT -->
  <section class="product-single">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="product-image"><img src="images/product-single-img.jpg" alt=""></div>
        </div>
        <div class="col-md-7">
          <h3 class="name">Robusta</h3>
          <div class="top-price">$23</div>
          <div class="description">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In aliquet porta eleifend. Aliquam laoreet viverra lectus eu suscipit.</div>
          <div class="product-action">
            <div class="quantity">
                            <input type="number" min="1" max="9" step="1" value="1">
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
          </div>
          <div class="product-info">
            <div class="item">Category: <a href="#">Coffee</a></div>
            <div class="item">Product ID: <strong>10</strong></div>
            <div class="item">Tags: <a href="#">Coffee,</a> <a href="#">Robusta</a></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="tabs wc-tabs">
              <li class="description_tab active">
                <a href="#tab-description">Description</a>
              </li>
              <li class="reviews_tab">
                <a href="#tab-reviews">Reviews</a>
              </li>
            </ul>
            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
              <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In aliquet porta eleifend. Aliquam laoreet viverra lectus eu suscipit. Fusce eget cursus sem, non dapibus mauris. Morbi facilisis faucibus risus, eu pharetra libero sodales at.</p>
              <p>In metus quam, pretium ut faucibus elementum, vulputate eu tellus. Nulla volutpat ornare ante. Aliquam sit amet augue vitae arcu pellentesque interdum vel sed orci. Quisque non dolor purus. Fusce lacinia, elit ut condimentum malesuada, ligula leo sodales enim, vel dignissim tortor lectus in mi. Nulla tristique, velit in ultricies mattis, neque sem ullamcorper erat, at pulvinar nunc metus eu nulla. Proin at urna quam. Vestibulum ac feugiat ipsum. Nullam tincidunt tellus eget bibendum sagittis.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-12">
          <h2 class="related-title">Related Products</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="product-item">
                <div class="img-wrap"><a href="#"><img src="images/prod-img.jpg" alt=""></a></div>
                <a href="#" class="name">100%  Arabica</a>
                <div class="text">Professional espresso serie</div>
                <div class="price">$19</div>
                <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-item">
                <div class="img-wrap"><a href="#"><img src="images/prod-img1.jpg" alt=""></a></div>
                <a href="#" class="name">Espresso Premium</a>
                <div class="text">Professional espresso serie</div>
                <div class="price">$46</div>
                <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-item">
                <div class="img-wrap"><a href="#"><img src="images/prod-img.jpg" alt=""></a></div>
                <a href="#" class="name">100%  Arabica</a>
                <div class="text">Professional espresso serie</div>
                <div class="price">$19</div>
                <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-item">
                <div class="img-wrap"><a href="#"><img src="images/prod-img1.jpg" alt=""></a></div>
                <a href="#" class="name">Espresso Premium</a>
                <div class="text">Professional espresso serie</div>
                <div class="price">$46</div>
                <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT END -->
























  <main class="page-content">
    <div class="shell section-60">
      <div class="range product-details">
        <div class="cell-md-6">
          <div class="range">
            <div class="cell-lg-2 cell-sm-2 cell-md-3">
              <div class="slider-nav" id="gallery_09">
                <div>
                <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" data-zoom-image="<?php echo base_url(); ?>uploads//product/<?php echo $picture; ?>">
                <img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" width="100"  /></a>
                </div>
               <?php 
                foreach ($query as $row) {?>
              <a  href="#" class="elevatezoom-gallery"
                   data-image="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>"
                   data-zoom-image="<?php echo base_url(); ?>uploads/product/<?php echo $row->img; ?>"
                  ><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>" width="100"  /></a>
                  <?php }?>
              </div>
            </div>
            <div class="cell-lg-10 cell-md-9 cell-sm-8 offset-top-20 offset-sm-top-0">
              <div data-lightbox="gallery" class="slider-for">
                <div>
                  <div class="thumbnail-variant-2">
                      <!--<img src="<?php echo base_url(); ?>uploads/<?php echo $picture; ?>" id="zoom_01" data-zoom-image="<?php echo base_url(); ?>uploads/product/<?php echo $picture; ?>" width="470" height="632" alt="" class="img-responsive">-->
                      <img id="zoom_09" src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" data-zoom-image="<?php echo base_url(); ?>uploads/product/<?php echo $picture; ?>"/>
                  </div>
                </div>
                  <!--<?php $i=1;
                  foreach ($query as $row) {$i=$i+1;?>
                <div>
                  <div class="thumbnail-variant-2">
                    <img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>" id="zoom_0<?php echo $i; ?>" data-zoom-image="<?php echo base_url(); ?>uploads/product/<?php echo $row->img; ?>" width="470" height="632" alt="" class="img-responsive" >
                  </div>
                </div>
                <?php }?>-->
              </div>
            </div>
          </div>
        </div>
        <div class="cell-md-6 text-sm-left">
        <div class="range">
          <div class="cell-md-6 text-sm-left">
          <h3 class="product-details-heading text-thin"><?php echo $title; ?></h3>
          </div>
          <div class="cell-md-6 text-sm-left">
            <?php if($this->session->userdata('uid')){?>
           <?php if(!empty($this->user->check_wish($this->session->userdata('uid'),$id))) {?>
              <div class="elements-group-30"><a onclick="javascript:wishlist(<?php echo $id;?>);" class="link"><span class="icon icon-md mdi mdi-heart-outline wishadd" id="wish"></span></a><a id="wishtext">Added to Wishlist</a></div>
            <?php }else{?>
              <div class="elements-group-30" ><a onclick="javascript:wishlist1(<?php echo $id;?>);" class="link"><span class="icon icon-md  mdi mdi-heart-outline" id="wish"></span></a><a id="wishtext">Add to Wishlist</a></div>
          <?php } }else {?>
              <div class="elements-group-30" id="wish"><a  class="link" href="#"  data-toggle="modal" data-target="#myModal" id="wishtext"><span class="icon icon-md mdi mdi-heart-outline" id="" ></span></a></div>
          <?php }?>
          </div>
          </div>
          <hr class="divider divider-iron divider-dotted divider-offset-sm">
          <div class="offset-top-4 reveal-sm-flex range-sm-justify">
            <div class="product-details-price"><span class="product-details-price-big">&#8377; <?php echo $cost;?></span></div>
            <div class="range-center reveal-flex offset-top-20 offset-sm-top-30">
              <div class="product-details-rating"><?php 
                  $i=0;
                  while($rate>$i){
                  echo"<span class='icon icon-xs mdi mdi-star'></span>";
                  $i=$i+1;}
                  while($i<5){
                    echo"<span class='icon icon-xs mdi mdi-star text-gray-light'></span>";
                    $i=$i+1;
                  }
                  ?></div>
              <div><a href="#comments">(Reviews <?php echo $review;?> customer review)</a></div>
            </div>
          </div>
          <hr class="divider divider-iron divider-dotted divider-offset-20">
          <p><span class='text-italic'>Categories:</span> <a href='products.html'><?php echo $category; ?></a></p>
          <p><span class='text-italic'>Tag:</span> <a href='products.html'>Earrings</a></p>
          <hr class="divider divider-iron divider-dotted divider-offset-sm">
          <div class="clearfix reveal-xs-flex reveal-sm-block range-justify">
            <?php if(!empty($this->user->check_cart($this->session->userdata('uid'),$id))) {?>
                <div class="pull-xs-left"><a class="prefix-sm-30 btn btn-primary btn-icon btn-icon-left" href="<?php echo base_url("index.php/cart"); ?>">Go To Cart</a>
              </div>
            <?php }else{?>
                <div class="pull-xs-left" id="addcartbtn" ><a class="prefix-sm-30 btn btn-primary btn-icon btn-icon-left" onclick="javascript:cartadd(<?php echo $id;?>);"><span class="icon icon fl-line-icon-set-shopping63"></span><span class="btn-text">Add to cart</span></a></div>
                <div class="pull-xs-left" id="gocartbtn"><a class="prefix-sm-30 btn btn-primary btn-icon btn-icon-left" href="<?php echo base_url("index.php/cart"); ?>">Go To Cart</a>
              </div>
           <?php }?>
           </div>
        </div>
      </div>
      <div class="responsive-tabs offset-top-30">
        <ul class="resp-tabs-list">
          <li>Description</li>
          <li>Reviews <?php echo $review;?></li>
        </ul>
        <div class="resp-tabs-container text-left">
          <div>
            <h4>Description</h4>
            <p class="offset-top-20"><?php $Descr=entity_decode($Descr,$charset = NULL); echo auto_typography(html_escape($Descr)); ?></p>
          </div>
          <div id="comments">
            <h4>Review for <?php echo $title;?></h4>
            <?php
             foreach ($query1 as $row) {?>
            <div class="offset-top-20 unit unit-horizontal unit-spacing-21 product-comment">
              <div class="unit-body offset-top-10">
                <p>Posted by <a style="text-transform:capitalize;" ><?php echo $row->uname; ?></a></p>
                <p>&#34;<?php echo $row->review; ?>&#34;</p>
                <div class="product-details-rating">
                <?php 
                  $i=0;
                  while($row->rate>$i){
                  echo"<span class='icon icon-xs mdi mdi-star'></span>";
                  $i=$i+1;}
                  while($i<5){
                    echo"<span class='icon icon-xs mdi mdi-star text-gray-light'></span>";
                    $i=$i+1;
                  }
                  ?>
                 </div>
              </div>
            </div>
            <?php  }?>
            <h4 class="offset-top-45">Add a Review</h4>
            <div class="range offset-top-0">
              <div class="cell-md-6">
              <?php if(!empty($this->session->userdata('uid'))){
                 $attributes = array("name" => "review");
                echo form_open("profile/review", $attributes);?>
                  <div class="offset-top-20 reveal-flex range-middle">
                    <div class="text-italic">
                      <p>Your Rating: <span class='text-primary'>*</span></p>
                    </div>
                    <div class="inset-left-10">
                      <fieldset class="rating">
                        <input id="star5" type="radio" name="rate" value="5">
                        <label for="star5" title="Awesome - 5 stars" class="full"></label>
                        <input id="star4" type="radio" name="rate" value="4">
                        <label for="star4" title="Pretty good - 4 stars" class="full"></label>
                        <input id="star3" type="radio" name="rate" value="3">
                        <label for="star3" title="Meh - 3 stars" class="full"></label>
                        <input id="star2" type="radio" name="rate" value="2">
                        <label for="star2" title="Kinda bad - 2 stars" class="full"></label>
                        <input id="star1" type="radio" name="rate" value="1" required>
                        <label for="star1" title="Bad - 1 star" class="full"></label>
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-group offset-top-20 hide">
                    <label class="text-light text-italic"> </label>
                    <input type="text" class="form-control" name="productid" value="<?php echo $id;?>">
                  </div>
                  <div class="form-group offset-top-20 hide">
                    <label class="text-light text-italic">Your Name: <span class='text-primary'>*</span></label>
                    <input type="text" class="form-control" name="uname" value="<?php echo $this->session->userdata('fname'); ?> <?php echo $this->session->userdata('fname'); ?>">
                  </div>
                  <div class="form-group offset-bottom-0">
                    <label class="text-light text-italic">Your Review: <span class='text-primary'>*</span></label>
                    <textarea class="form-control" name="review" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary offset-top-30">Submit</button>
                <?php echo $this->session->flashdata('msg'); ?>
                  <?php echo form_close(); }else{ ?><h5>Login to Review</h5>
                  <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-primary offset-top-30">Login</a><?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="offset-top-20">Related Products</h3>
      <hr class="divider divider-bold divider-base">
      <div data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true" class="owl-carousel offset-top-30">
        <?php foreach ($query2 as $row ) {?>
          <div class="product reveal-inline-block">
            <div class="product-media"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img alt="" src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" width="290" height="389" class="img-responsive"></a>
              <div class="product-overlay"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" class="icon icon-circle icon-base fl-line-icon-set-shopping63"></a></div>
              <div class="product-overlay-variant-2"><a href="<?php echo base_url("index.php/product/view/$row->category"); ?>" class="label label-default">Featured</a></div>
            </div>
            <div class="offset-top-10">
              <p class="big"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" class="text-base"><?php echo $row->title;?></a></p>
            </div>
            <div class="product-price text-bold">&#8377; <?php echo $row->cost;?></div>
          </div>
        <?php }?>
      </div>
    </div>
  </main>
  <footer class="page-footer section-60">
    <div class="shell"><a href="index-2.html" class="brand"><img alt="" src="images/logo.png" width="163" height="41" class="reveal-inline-block img-responsive"></a>
      <p>Our product is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience.  Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p>
      <ul class="elements-group-20 offset-top-20">
        <li><a href="#" class="icon icon-xs text-base fa-facebook"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-twitter"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-google-plus"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-linkedin"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-pinterest"></a></li>
      </ul>
      <p class="offset-top-20 text-muted"><span class='text-bold'>Jewelry</span> 2017 | <a href='privacy.html'>Privacy Policy</a></p>
    </div>
  </footer>
</div>

<script src="<?php echo base_url('media/js/core.min.js'); ?>"></script> 
<script src="<?php echo base_url('media/js/script.js'); ?>"></script>
<!--<script type="text/javascript">
  function click (e) {
    if (!e)
      e = window.event;
    if ((e.type && e.type == "contextmenu") || (e.button && e.button == 2) || (e.which && e.which == 3)) {
      if (window.opera)
        window.alert("");
      return false;
    }
  }
  if (document.layers)
    document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = click;
  document.oncontextmenu = click;
</script>-->
<script src="<?php echo base_url('media/js/jquery.elevatezoom.js'); ?>"></script>
<script type="text/javascript">
    $("#gocartbtn").hide();
</script>

<script type="text/javascript">
  
$("#zoom_09").elevateZoom({
            gallery : "gallery_09",
            galleryActiveClass: "active"
            }); 
            
  
     $("#select").change(function(e){
   var currentValue = $("#select").val();
   <?php $i=0;
                  foreach ($query as $row) {$i=$i+1;?>
   if(currentValue == <?php echo $i; ?>){    
   smallImage = '<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>';
   largeImage = '<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>';
   }<?php }?>
  // Example of using Active Gallery
  $('#gallery_09 a').removeClass('active').eq(currentValue-1).addClass('active');   
 
 
   var ez =   $('#zoom_09').data('elevateZoom');    
   
  ez.swaptheimage(smallImage, largeImage); 
     
    });

</script>
      <script type="text/javascript">
      function cartadd(id)
      { 
        var x = document.getElementById("cartcounter").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('profile/cartadd');?>",
                      data:"id="+id,
                      success: function (response) {
                        document.getElementById("cartcounter").innerHTML = ++x;
                    $("#addcartbtn").hide();
                    $("#gocartbtn").show();
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function wishlist(id)
      {
            var x=document.getElementById("wishtext").innerHTML;
              $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('profile/wishlist');?>",
                      data:"id="+id,
                    success: function (response) {
                      $("#wish").toggleClass("wishremove");
                      if(x=='Add to Wishlist'){
                      document.getElementById("wishtext").innerHTML ='Added to Wishlist';}
                      else{
                        document.getElementById("wishtext").innerHTML ='Add to Wishlist';
                      }
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function wishlist1(id)
      {var x=document.getElementById("wishtext").innerHTML;
            $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('profile/wishlist');?>",
                      data:"id="+id,
                    success: function (response) {
                      $("#wish").toggleClass("wishadd");
                      if(x=='Add to Wishlist'){
                      document.getElementById("wishtext").innerHTML ='Added to Wishlist';}
                      else{
                        document.getElementById("wishtext").innerHTML ='Add to Wishlist';
                      }
                    }
                  });
      }
      </script>
</body>
</html>