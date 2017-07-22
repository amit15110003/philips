
    <div class="contact-form container-fluid">
        <div class="col-md-4 col-md-offset-4 text-xs-left" style="padding-top: 4%;">
          <h4>SignUp form</h4>
          <?php $attributes = array("name" => "signupform");
            echo form_open("signup", $attributes);?>
            <input class="contact-input col-md-6" id="name" type="text" name="fname" placeholder="First Name" data-constraints="@NotEmpty">
            <input class="contact-input col-md-6" id="name" type="text" name="lname"  placeholder="Last Name" data-constraints="@NotEmpty">
            <input class="contact-input" id="email" type="text" name="email" placeholder="Email" data-constraints="@NotEmpty @Email">
            <input class="contact-input" id="name" type="password" name="password"  placeholder="Password" data-constraints="@NotEmpty" style="height: 49px;line-height: 49px;padding: 10px 22px 10px 22px;font-size: 14px; font-weight: 300;border: none;transition: all 400ms;    border: 1px solid #e3ded4; border-radius: 2px; font-size: 16px;">
            <input class="contact-input" id="name" type="text" name="contact"  placeholder="Contact Number" data-constraints="@NotEmpty">
            <button class="pull-right" type="submit">Sign Up</button>
          </div>
          <?php echo $this->session->flashdata('msg'); ?>
          <?php echo form_close(); ?>
        </div>
    </div>