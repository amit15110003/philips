<!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Shoping cart</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->

  <!-- CART --> 
<section class="cart-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="woocommerce">
              <div class="page_woo woo_cart">
                  <form method="post">
                      <table class="shop_table shop_table_responsive cart">
                          <thead>
                              <tr>
                                  <th class="product-name">&nbsp;</th>
                                  <th class="product-thumbnail">Product</th>
                                  <th class="product-price">Price</th>
                                  <th class="product-quantity">Quantity</th>
                                  <th class="product-subtotal">Total</th>
                                  <th class="product-name">&nbsp;</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($query as $row ) {
                              $details=$this->user->get_product_id($row->productid);
                            ?>
                            <?php if($row->status1=="cancel"){?>
                <tr class="cart_item" id="order_<?php echo $row->id;?>">
                
                <td class="product-thumbnail"><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="reveal-inline-block"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                <td class="product-name"><p><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="text-base"><?php  echo $details[0]->title;?></a></p></td>
                <td class="product-subtotal"><p class="big text-primary">&#8377; <span id="itemcost_<?php echo $row->id;?>"><?php echo  $details[0]->cost;?></span></p></td>
                <td class="product-quantity"><span><?php echo $row->item;?></span></td>
                <td class="product-subtotal"><p class="big text-primary"> &#8377;<span id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->cost*$row->item;?></span></p></td>   <td class="product-remove"><p style="color:red;">Cancelled</p></td>
              </tr><?php }else if($row->status1=="delivered"){?>
              <tr class="cart_item" id="order_<?php echo $row->id;?>">
                
                <td class="product-thumbnail"><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="reveal-inline-block"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                <td class="product-name"><p><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="text-base"><?php  echo $details[0]->title;?></a></p></td>
                <td class="product-subtotal"><p class="big text-primary">&#8377; <span id="itemcost_<?php echo $row->id;?>"><?php echo  $details[0]->cost;?></span></p></td>
                <td class="product-quantity"><span><?php echo $row->item;?></span></td>
                <td class="product-subtotal"><p class="big text-primary"> &#8377;<span id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->cost*$row->item;?></span></p></td>   <td class="product-remove"><p style="color:green;">Delivered</p></td>
              </tr>
              
              <?php }else{?>
              <tr class="cart_item" id="order_<?php echo $row->id;?>">
                
                <td class="product-thumbnail"><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="reveal-inline-block"><img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                <td class="product-name"><p><a href="<?php echo base_url("index.php/product/details1/$row->productid"); ?>" class="text-base"><?php  echo $details[0]->title;?></a></p></td>
                <td class="product-subtotal"><p class="big text-primary">&#8377; <span id="itemcost_<?php echo $row->id;?>"><?php echo  $details[0]->cost;?></span></p></td>
                <td class="product-quantity"><span><?php echo $row->item;?></span></td>
                <td class="product-subtotal"><p class="big text-primary"> &#8377;<span id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->cost*$row->item;?></span></p></td>   <td class="product-remove"><a class="offset-top-20 btn btn-default text-center" onclick="javascript:order_cancel(<?php echo $row->id;?>);">Cancel</a></td>
              </tr>
                              <?php }?>
                              <?php }?>
                          </tbody>
                      </table>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
