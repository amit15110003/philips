<main class="page-content ">
    <div class="shell section-bottom-60 offset-top-20">
      <form action="#" class="shoping-cart">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th colspan="2">Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row ) {
              $details=$this->user->get_product_id($row->productid);
             ?>
              <tr class="cart_item" id="cart_<?php echo $row->id;?>">
                <td class="product-remove"><a  class="icon icon-xs text-primary mdi mdi-close" onclick="javascript:remove_cart(<?php echo $row->id;?>);"></a></td>
                <td class="product-thumbnail"><a href="single-product.html" class="reveal-inline-block"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                <td class="product-name"><p><a href="single-product.html" class="text-base"><?php  echo $details[0]->title;?></a></p></td>
                <td class="product-subtotal"><p class="big text-primary">&#8377; <span id="itemcost_<?php echo $row->id;?>"><?php echo  $details[0]->cost;?></span></p></td>
                <td class="product-quantity"><input value="<?php echo $row->item;?>" class="form-control" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);" ></td>
                <td class="product-subtotal"><p class="big text-primary"> &#8377;<span id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->cost*$row->item;?></span></p></td>
              </tr>
            <?php }?>
              <tr class="cart_item">
                <td></td><td></td><td></td><td></td>
                <td class="product-name">Total</td>
                <td><p class="big text-primary">&#8377;
                  <span id="totalcost" ><?php $i=0;
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_id($row->productid);
                   $i=$i+($details[0]->cost*$row->item);}
                   echo $i;?></span></p>
                               
                </td>
              </tr>
            </tbody>
          </table>
          <a href="<?php echo base_url("index.php/checkout"); ?>" class="offset-top-20 btn btn-primary pull-right">Checkout</a>
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
    function remove_cart(postid)
    {
      var x = document.getElementById("cartcounter").innerHTML;
      var l=document.getElementById("cost_"+postid).innerHTML;
      var t=document.getElementById("totalcost").innerHTML;
      var s=t-l;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/remove_cart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                        document.getElementById("cartcounter").innerHTML = --x;
                        document.getElementById("totalcost").innerHTML=s;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function item(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var k=s+r;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/itemadd');?>",
                    data: {id: id, item: item},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    document.getElementById("totalcost").innerHTML=k;
                    }
                });
    }
  </script>

</body>
</html>