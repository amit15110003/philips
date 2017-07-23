  <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="text-transform: capitalize;"><?php echo $title; ?></h1> 
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
          <div class="product-image">
               <img id="zoom_09" src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" data-zoom-image="<?php echo base_url(); ?>uploads/product/<?php echo $picture; ?>" class="img-responsive"/>
          </div>
          <section class="popular-item">
          <div class="row owl-carousel shop-slider" id="gallery_09" style="margin-top: 2%;">
           <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" data-zoom-image="<?php echo base_url(); ?>uploads//productthumbs/<?php echo $picture; ?>">
                <img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $picture; ?>" width="100%"  /></a>
          <?php foreach ($query as $row ) {?>
           <a  href="#" class="elevatezoom-gallery"
                   data-image="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>"
                   data-zoom-image="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>"
                  ><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>" class="img-responsive" /></a>
          <?php }?>
          </div>
          </section>
        </div>
        <div class="col-md-offset-1 col-md-6">
          <h3 class="name" style="text-transform: capitalize;"><?php echo $title; ?></h3>
          <div class="top-price">&#8377; <?php echo $cost;?></div>
          <div class="description"><?php $Descr=entity_decode($Descr,$charset = NULL); echo auto_typography(html_escape($Descr)); ?>
          </div>
            <div class="item">Category: <a href="#"><?php echo $category; ?></a></div>
            <div class="item">Product ID: <strong>PHILIPS<?php echo $id; ?></strong></div>
            <div class="item">Tags: <a href="#">Coffee,</a> <a href="#">Robusta</a></div>
          <div class="product-action">
          <!--<?php 
          if(!empty($query3)){
          foreach ($query3 as $row ) {
             ?>
            <div class="quantity">
                            <input type="number" min="1" max="100" step="1" value="<?php  echo $row->item;?>" class="form-control" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);">
            </div>
          <?php }}else{?>
          <div class="quantity">
                            <input type="number" min="1" max="100" step="1" value="" class="form-control" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);">
            </div>
          <?php }?>-->
            <?php if(!empty($this->user->check_cart($this->session->userdata('uid'),$id))) {?>
                <a href="<?php echo base_url("index.php/cart"); ?>" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Go To Cart</a>
            <?php }else{?>
                <div id="addcartbtn">
                <a  onclick="javascript:cartadd(<?php echo $id;?>);" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart</a></div>
                <div id="gocartbtn">
                <a  href="<?php echo base_url("index.php/cart"); ?>" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Go To Cart</a>
                </div>
              </div>
           <?php }?>
          </div>
        </div>
        <div class="col-md-12">
          <h2 class="related-title">Related Products</h2>
          <div class="row">
          <?php foreach ($query2 as $row ) {?>
            <div class="col-md-3">
              <div class="product-item">
                <div class="img-wrap"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive"></a></div>
                <a href="#" class="name"><?php echo $row->title;?></a>
                <div class="text">Professional espresso serie</div>
                <div class="price">&#8377; <?php echo $row->cost;?></div>
                <a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" class="btn btn-default">View</a>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT END -->
