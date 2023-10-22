<section class="column column--bg-two">
  <div class="column__inner">

    <div class="column__content">

      <h2><?php echo $why_heading ?></h2>
      <?php if ($why_lead) { ?>
        <?php echo $why_lead ?>
      <?php } ?>

      <?php if ($why_bullets) { ?>
      <ul class="tick-list">
        <?php foreach($why_bullets as $bullet) { ?>
        <li>
          <span class="icon icon--tick"><svg role="img"><use xlink:href="#tick" href="#tick"></use></svg></span>
          <?php echo $bullet['item'] ?>
        </li>
        <?php } ?>
      </ul>
      <?php } ?>

      <?php include ("inc/reviews.php"); ?>

    </div>
    
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>