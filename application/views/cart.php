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
                                  <th class="product-remove">&nbsp;</th>
                                  <th class="product-thumbnail">Product</th>
                                  <th class="product-name">&nbsp;</th>
                                  <th class="product-price">Price</th>
                                  <th class="product-quantity">Quantity</th>
                                  <th class="product-subtotal">Total</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($query as $row ) {
                            $details=$this->user->get_product_id($row->productid);
                            ?>
                              <tr class="cart_item" id="cart_<?php echo $row->id;?>">
                                  <td class="product-remove">
                                      <a onclick="javascript:remove_cart(<?php echo $row->id;?>);" class="remove" title="Remove this item"><i class="fa fa-close" aria-hidden="true"></i></a> 
                                    </td>
                                  <td class="product-thumbnail">
                                      <a href="#">
                                        <img src="<?php echo base_url(); ?>uploads/productthumbs/<?php echo $details[0]->picture; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" >
                                      </a>
                                  </td>
                                  <td class="product-name" data-title="Product">
                                      <a href="#"><?php  echo $details[0]->title;?></a> 
                                    </td>
                                  <td class="product-price" data-title="Price">
                                      <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377; </span><span id="itemcost_<?php echo $row->id;?>"><?php echo  $details[0]->cost;?></span>
                                  </td>
                                  <td class="product-quantity" data-title="Quantity">
                                      <div class="quantity">
                                          <input type="number" min="1" max="100" step="1" value="<?php echo $row->item;?>" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);">
                                      </div>
                                  </td>
                                  <td class="product-subtotal" data-title="Total">
                                      <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span><span id="cost_<?php echo $row->id;?>"><?php echo  $details[0]->cost*$row->item;?></span>
                                  </td>
                              </tr>
                              <?php }?>
                              <tr>
                                  <td colspan="6" class="actions">
                                      <div class="coupon">
                                          <label for="coupon_code">Coupon Code:</label>
                                          <input name="coupon_code" class="input-text" id="coupon_code" value="" type="text">
                                          <input class="button" name="apply_coupon" value="APPLY CODE" type="submit">
                                      </div>
                                      <input class="button" name="update_cart" value="Update Cart" type="submit">
                                    </td>
                              </tr>
                          </tbody>
                      </table>
                  </form>
                  <div class="cart-collaterals">
                      <div class="cart_totals">
                          <table class="shop_table shop_table_responsive">
                              <tbody>
                                  <tr class="cart-subtotal">
                                      <th>Subtotal</th>
                                      <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>
                                        <span id="totalcost" ><?php $i=0;
                                        foreach ($query as $row ) {
                                        $details=$this->user->get_product_id($row->productid);
                                        $i=$i+($details[0]->cost*$row->item);}
                                        echo $i;?></span>
                                      </td>
                                  </tr>
                                  <tr class="order-total">
                                      <th>Total</th>
                                      <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>
                                      <span id="totalcost" ><?php $i=0;
                                      foreach ($query as $row ) {
                                      $details=$this->user->get_product_id($row->productid);
                                      $i=$i+($details[0]->cost*$row->item);}
                                      echo $i;?></span></strong> </td>
                                  </tr>
                              </tbody>
                          </table>
                          <div class="wc-proceed-to-checkout">
                              <a  href="<?php echo base_url("index.php/checkout"); ?>" class="checkout-button btn btn-default alt wc-forward">Checkout</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CART END --> 
