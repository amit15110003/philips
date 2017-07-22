 <!-- MAIN SHOP -->
  <section class="popular-item">
    <div class="container">
      <div class="row">
        <br><br>
        <div class="col-md-12"><h2>Popular items</h2></div>
        <div class="col-md-12">
          <?php foreach ($query as $row ) {?>
            <div class="col-md-3 item">
              <div class="img-wrap"><a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture;?>" alt="" class="img-responsive"></a></div>
              <a href="#" class="name"><?php echo $row->title;?></a>
              <div class="text"><?php echo $row->category;?></div>
              <div class="price">&#8377; <?php echo $row->cost;?></div>
              <a href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" class="btn btn-default">View</a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>

  <div class="text-center">
    <ul class="pagination">
        <li ><?php echo $links; ?></li>
    </ul>
  </div>
  </section>
  <!-- MAIN SHOP END -->
