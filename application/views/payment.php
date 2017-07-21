<?php

// Merchant key here as provided by Payu
$MERCHANT_KEY = "rjQUPktU";

// Merchant Salt as provided by Payu
$SALT = "e5iIg1jwi8";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email||||||||||";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
    <h2>PayU Form</h2>
    <br/>
    <?php if($formError) { ?>
  
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    
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
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" value="<?php $i=0;
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_id($row->productid);
                   $i=$i+($details[0]->cost*$row->item);}
                   echo $i;?>" />

  <input type="hidden" name="firstname" value="<?php echo $fname;?>" />
  <input  type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>" />
  <input type="hidden" name="phone" value="<?php echo $mob;?>" /></td></tr>
  <input type="hidden"  name="productinfo" value=" <?php foreach ($query as $row ) {
              $details=$this->user->get_product_id($row->productid);
             ?><?php  echo $details[0]->title;?>
            <?php }?>" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
  <input type="hidden" name="surl" value="<?php echo base_url("index.php/payment/success"); ?>" size="64" />
  <input type="hidden" name="furl" value="<?php echo base_url("index.php/payment/failure"); ?>" size="64" />
<?php if(!$hash) { ?><input type="submit" value="Submit" />
          <?php } ?>
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