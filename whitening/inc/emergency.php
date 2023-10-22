<section class="column">
  <div class="column__inner">
    <div class="column__content">
      <h2><?php echo $emergency_heading ?></h2>
      <?php if ($emergency_lead) { ?>
      <?php echo $emergency_lead ?>
      <?php } ?>
    </div>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>