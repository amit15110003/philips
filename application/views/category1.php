
                     <div class="range offset-top-30" >
                     <?php foreach ($query as $row) {?>
                        <div class="cell-md-4 cell-sm-6">
                           <div class="product reveal-inline-block">
                              <div class="product-media">
                                 <a href="single-product.html"><img alt="" src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture; ?>" width="290" height="389" class="img-responsive"></a>
                                 <div class="product-overlay"><a class="btn btn-primary pull-right" href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" target="_blank">View</a>
                                    </div>
                                 <div class="product-overlay-variant-2"><a href="category.html" class="label label-default">Featured</a></div>
                              </div>
                              <div class="offset-top-10">
                                 <p class="big"><a href="single-product.html" class="text-base"><?php echo $row->title; ?></a></p>
                              </div>
                              <div class="product-price text-bold">&#8377;
                                 <?php echo $row->cost;?>
                                 </div>
                              <div class="product-rating">
                                 <div><?php 
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
                        </div>
                     <?php }?>
                     </div>
      