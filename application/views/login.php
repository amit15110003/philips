       <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Login</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->

        <div class="col-md-4 col-md-offset-4">
          <div class="contact-right">
            <h2>Login</h2>
            <?php $attributes = array("name" => "loginform");
            echo form_open("login/index", $attributes);?>
            <div class="contact-form">
              <div class="row">
                <div class="col-md-12">
                  <input class="contact-input" type="email" placeholder="Email *" name="email">
                </div>
                <div class="col-md-12">
                  <input class="contact-input" type="password" placeholder="Password" name="password" style="height: 49px;
    line-height: 49px;
    padding: 10px 22px 10px 22px;
    font-size: 14px;
    font-weight: 300;
    border: none;
    transition: all 400ms;    border: 1px solid #e3ded4;
    border-radius: 2px;
    font-size: 16px;">
                </div>
                <div class="col-md-12 text-center">
                  <button>SUBMIT</button>
                </div>
              </div>  
            </div>
            <h5><?php echo $this->session->flashdata('msg'); ?></h5>
            <?php echo form_close(); ?>
          </div>
        </div>
