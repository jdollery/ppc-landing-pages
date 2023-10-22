<section class="column column--bg-one">
  <div class="column__inner">
    <div class="column__content">
      <h2><?php echo $benefits_heading ?></h2>
      <?php if ($benefits_lead) { ?>
      <?php echo $benefits_lead ?>
      <?php } ?>
      <?php if ($benefits_bullets) { ?>
      <ul class="tick-list">
        <?php foreach($benefits_bullets as $benefit) { ?>
        <li>
          <span class="icon icon--tick"><svg role="img"><use xlink:href="#tick" href="#tick"></use></svg></span>
          <?php echo $benefit['item'] ?>
        </li>
        <?php } ?>
      </ul>
      <?php } ?>
    </div>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>