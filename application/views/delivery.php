  <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Delivery Address</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->  
  <?php if(empty($data)){$data="0";}?>
    <div class="container-fluid ">
    <?php $attributes = array("name" => "purity");
      echo form_open("profile/delivery", $attributes);?>
      <div class="contact-form row" style="padding-top: 2%;">
        <div class="col-md-3 "></div>
        <div class="col-sm-6">
          <h4> Delivery Address</h4>
          <div class="row offset-top-20">
            <div class="col-md-6 ">
                  <input type="text" class="contact-input" name="fname" value="<?php echo $fname;?>" placeholder="First Name " required>
            </div>
            <div class="col-md-6 ">
                  <input type="text" class="contact-input" name="lname" value="<?php echo $lname;?>" placeholder="Last Name " required>
            </div>
            <div class="col-md-6">
                  <input type="text" class="contact-input" name="mob" value="<?php echo $mob;?>" placeholder="Contact Number" required>
            </div>
            <div class="col-md-6 ">
                  <input type="text" class="contact-input" name="town" value="<?php echo $town;?>" placeholder="City" required>
            </div>
            <div class="col-md-12 ">
                  <input type="text" placeholder="Street address, Building Number" class="contact-input" name="addr" value="<?php echo $addr;?>" placeholder="Address" required>
            </div>
          </div>
          <div class="">
            <button type="submit" class="pull-right">Submit</button>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
    </div>