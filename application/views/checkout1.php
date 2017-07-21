<?php $i=0;
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_id($row->productid);
                   $i=$i+($details[0]->cost*$row->item);}?>
<?php 
              foreach ($query as $row ) {
              $details=$this->user->get_product_id($row->productid);
               $info=$details[0]->title;}?>
<?php

// Merchant key here as provided by Payu
$MERCHANT_KEY = "rjQUPktU";

// Merchant Salt as provided by Payu
$SALT = "e5iIg1jwi8";

    $firstname=$fname;
    $email=$this->session->userdata('email');
    $amount="1230";
    $productinfo="xyz";
    $phone=$mob;
    $txnid=time().rand(1000,99999);
  $hashSequence=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productinfo."|".$firstname."|".$email."|||||||||||".$SALT;
  $hash =strtolower(hash("sha512", $hashSequence)); 
  

?>
    <h2>PayU Form</h2>
    <br/>
    
    <?php foreach ($query as $row ) {
              $details=$this->user->get_product_id($row->productid);
             ?>
                   <h5><?php  echo $details[0]->title;?></h5>
            <?php }?>
            <h4><?php $i=0;
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_id($row->productid);
                   $i=$i+($details[0]->cost*$row->item);}
                   echo $i;?></h4>
    <form action="https://test.payu.in/_payment" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" value="1230" />

  <input type="hidden"  name="firstname" value="<?php echo $fname;?>" />
  <input  type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>" />
  <input type="hidden" name="phone" value="<?php echo $mob;?>" /></td></tr>
  <input type="hidden"  name="productinfo" value="xyz" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
  <input type="hidden" name="surl" value="<?php echo base_url("index.php/checkout/pay_success"); ?>" size="64" />
  <input type="hidden" name="furl" value="http://www.enkindle.co.in/" size="64" />
  <input type="submit" value="Continue" class="btn btn-primary" />
    </form>

<main class="page-content">
    <div class="shell section-60 text-sm-left">
      <form action="#" class="order-form range">
        <div class="cell-sm-6">
        </div>
        <div class="cell-sm-6">
        </div>
        <div class="cell-sm-12 offset-top-30">
          
        </div>
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
</body>
</html>