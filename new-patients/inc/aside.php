<aside class="aside<?php if ($current_page) { ?> aside--<?php echo $current_page ?><?php } ?>" id="dialogContact">

  <dialog class="dialog" role="dialog">

    <button class="dialog__close" data-dialog-close>
      <span class="icon icon--close">
        <svg role="img"><use xlink:href="#close" href="#close"></use></svg>
      </span>
      <span class="hidden">Close</span>
    </button>

    <div class="dialog__inner">

      <div class="dialog__heading">
        <h3><?php echo $form_heading ?></h3>
      </div>

      <?php if ($dengro_hook) { ?>
        <form class="form" id="validateForm" method="post" action="<?php echo $dengro_hook?>" novalidate="true">
      <?php } else { ?>
        <form class="form" id="validateForm" method="post" action="https://www.securedent.net/submit.ashx" novalidate="true">
      <?php } ?>

        <fieldset class="form__set">

          <div class="form__input">
            <input type="text" id="name" name="name" required placeholder="Enter your full name">
            <label for="name">Full Name</label>
          </div>

          <div class="form__input">
            <input type="number" id="telephone" name="telephone" placeholder="Enter your telephone number">
            <label for="telephone">Telephone Number</label>
          </div>

          <div class="form__input">
            <input type="email" id="email" name="submit_by" required placeholder="Email Address">
            <label for="email">Email Address</label>
          </div>

          <div class="form__input">
            <select 
              id="select" 
              name="new-patient" 
              placeholder="Are you a new patient?"  
              >
              <option></option>
              <option label="Yes, I&rsquo;m a new patient" value="Yes">Yes, I&rsquo;m a new patient</option>
              <option label="No, I&rsquo;m an existing patient" value="No">No, I&rsquo;m an existing patient</option>
            </select> 
          </div>

          <div class="form__input">
            <textarea name="enquiry" id="enquiry" cols="30" rows="4" placeholder="Enter your message or questions"></textarea>
            <label for="enquiry">Type a message, or any questions here&hellip;</label>
          </div>

          <div class="form__input">
            <label class="label--sm">On submitting this form you consent to <strong><?php echo $practice_name ?></strong> collecting your personal data. For more information please read our <a href="<?php echo $privacy_policy ?>">privacy policy</a>.</label>
          </div>

        </fieldset>

        <button class="button button--submit" type="submit"><?php echo $form_button ?></button>

        <?php if ($securedent_id) { ?>
        <input type="hidden" name="form_uid" value="<?php echo $securedent_id ?>">
        <input name="required" type="hidden" value="name,submit_by">
        <input type="hidden" name="data_order" value="name,submit_by,enquiry,telephone,new-patient">
        <input name="ok_url" type="hidden" id="ok_url" value="<?php echo $base_url ?>thanks.php">
        <input name="not_ok_url" type="hidden" id="not_ok_url" value="<?php echo $base_url ?>sorry.php">
        <?php } ?>

        <?php if ($dengro_hook) { ?>
        <input type="hidden" name="attribution" value="practice">
        <input type="hidden" name="utm_source" value="google">
        <input type="hidden" name="utm_medium" value="cpc">
        <input type="hidden" name="landing_url" value="<?php echo $base_url ?>">
        <input type="hidden" name="capture_url" value="<?php echo $base_url ?>">
        <?php } ?>

      </form>

    </div>

  </dialog>

  <div class="dialog__backdrop" data-dialog-close></div>

</aside>