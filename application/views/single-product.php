  <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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
          <div class="product-image"><img src="<?php echo base_url(); ?>uploads/product/<?php echo $picture; ?>" alt=""></div>
        </div>
        <div class="col-md-7">
          <h3 class="name" style="text-transform: capitalize;"><?php echo $title; ?></h3>
          <div class="top-price">&#8377; <?php echo $cost;?></div>
          <div class="description"><?php $Descr=entity_decode($Descr,$charset = NULL); echo auto_typography(html_escape($Descr)); ?>
          </div>
            <div class="item">Category: <a href="#"><?php echo $category; ?></a></div>
            <div class="item">Product ID: <strong>10</strong></div>
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
                <div class="img-wrap"><a href="#"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive"></a></div>
                <a href="#" class="name"><?php echo $row->title;?></a>
                <div class="text">Professional espresso serie</div>
                <div class="price">&#8377; <?php echo $row->cost;?></div>
                <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT END -->
