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
          <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Payment</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->
    <div class="contact-form">
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
  <input type="submit" value="Continue" class="pull-center" />
    </form>
  </div>

