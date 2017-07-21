      <main class="page-content">
            <div class="shell" style="padding-top: 60px;">
            </div>
            <div class="shell section-bottom-60">
               <div class="range">
                  <div class="cell-md-12">
                     <div class="range offset-top-30">
                     <?php if (!empty($query)){foreach ($query as $row) {?>
                        <div class="cell-md-3 cell-sm-6">
                           <div class="product reveal-inline-block">
                              <div class="product-media">
                                 <a href="single-product.html"><img alt="" src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->picture; ?>" width="290" height="389" class="img-responsive"></a>
                                 <!--<?php if(!empty($this->user->check_cart($this->session->userdata('uid'),$row->id))) {?>
                                    <div class="product-overlay"><a class="btn btn-primary pull-right" href="<?php echo base_url("index.php/cart"); ?>">Go To Cart</a>
                                    </div>
                                 <?php }else{?>
                                    <div class="product-overlay"><a class="icon icon-circle icon-base fl-line-icon-set-shopping63" onclick="javascript:cartadd(<?php echo $row->id;?>);"></a></div>
                                 <?php }?>-->
                                 <div class="product-overlay"><a class="btn btn-primary pull-right" href="<?php echo base_url("index.php/product/details/$row->category/$row->id"); ?>" target="_blank">View</a>
                                    </div>
                                 <!--<div class="product-overlay-variant-2"><a href="category.html" class="label label-default">Featured</a></div>-->
                              </div>
                              <div class="offset-top-10">
                                 <p class="big"><a href="single-product.html" class="text-base"><?php echo $row->title; ?></a></p>
                              </div>
                              <div class="product-price text-bold">
                                 &#8377; <?php echo $row->cost; ?>
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
                              <!--<div class="product-actions elements-group-10"><a class="icon mdi mdi-heart-outline icon-gray icon-sm" onclick="javascript:wishlist(<?php echo $row->id;?>);"></a></div>-->
                           </div>
                        </div>
                     <?php }}else{?>
                     <p>No Result Found</p>
                     <?php }?>
                     </div>
                     <div class="text-md-right offset-top-45">
                        <ul class="pagination">
                           <li><?php echo $links; ?></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <footer class="page-footer section-60">
            <div class="shell">
               <a href="<?php echo base_url(""); ?>" class="brand"><img alt="" src="<?php echo base_url(); ?>media/images/logosm.png" width="100" height="30" class="reveal-inline-block img-responsive"></a>
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
      <script type="text/javascript">
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
      </script>
</body>
</html>

