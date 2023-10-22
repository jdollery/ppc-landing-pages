<section class="column column--bg-three">
  <div class="column__inner">
    <div class="column__content">
      <h2><?php echo $offers_heading ?></h2>
      <?php if ($offers_lead) { ?>
      <?php echo $offers_lead ?>
      <?php } ?>
      <?php if ($offers_bullets) { ?>
      <ul class="tick-list">
        <?php foreach($offers_bullets as $offer) { ?>
        <li>
          <span class="icon icon--tick"><svg role="img"><use xlink:href="#tick" href="#tick"></use></svg></span>
          <?php echo $offer['item'] ?>
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