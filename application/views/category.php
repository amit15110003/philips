 <!-- MAIN SHOP -->
  <section class="popular-item">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Popular items</h2></div>
        <div class="col-md-12">
          <div class="row owl-carousel shop-slider">
          <?php foreach ($query as $row ) {?>
            <div class="item">
              <div class="img-wrap"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive"></a></div>
              <a href="#" class="name"><?php echo $row->title;?></a>
              <div class="text"><?php echo $row->category;?></div>
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
