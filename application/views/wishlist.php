<main class="page-content">
    <div class="shell section-bottom-60 offset-top-4">
      <form action="#" class="shoping-cart">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th colspan="2">Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Cart</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row ) {
              $details=$this->user->get_product_id($row->productid);
             ?>
              <tr class="cart_item" id="wish_<?php echo $row->id; ?>">
                <td class="product-remove"><a class="icon icon-xs text-primary mdi mdi-close"  onclick="javascript:remove_wish(<?php echo $row->id;?>);"></a></td>
                <td class="product-thumbnail"><a href="single-product.html" class="reveal-inline-block"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                <td class="product-name"><p><a href="single-product.html" class="text-base"><?php  echo $details[0]->title;?></a></p></td>
                <td class="product-descr"><?php  echo $details[0]->Descr;?></td>
                <td class="product-price"><p class="big text-primary">$<?php  echo $details[0]->cost;?></p></td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
      </form>
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
<script type="text/javascript">
    function remove_wish(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('wishlist/remove_wish');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#wish_"+postid).hide();
                    }
                });
    }
  </script>
</body>
</html>