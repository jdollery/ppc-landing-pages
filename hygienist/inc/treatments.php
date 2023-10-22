<section class="column column--bg-two column--center">
  <div class="column__inner">
    <div class="column__heading">
      <h2><?php echo $treatments_heading ?></h2>
      <?php if ($treatments_lead) { ?>
      <?php echo $treatments_lead ?>
      <?php } ?>
    </div>
    <ul class="column__list">
      <?php foreach($treatments as $treatment) { ?>
      <li class="column__cell">

        <picture class="column__img">

          <source type="image/webp" media="(min-width: 576px)" srcset="<?php echo convert_img('./img/' . $treatment['img'] . '.jpg','./img/' . $treatment['img'] . '.webp', 100); ?>">
          <source type="image/jpg" media="(min-width: 576px)" srcset="./img/<?php echo $treatment['img'] ?>.jpg">

          <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo convert_img('./img/' . $treatment['img'] . '-sm.jpg','./img/' . $treatment['img'] . '-sm.webp', 100); ?>">
          <source type="image/jpg" media="(max-width: 575px)" srcset="./img/<?php echo $treatment['img'] ?>-sm.jpg">

          <img src="./img/<?php echo $treatment['img'] ?>.jpg" alt="<?php echo $treatment['title'] ?>" width="800" height="800" loading="lazy" decoding="async">

        </picture>

        <h3 class="column__title"><?php echo $treatment['title'] ?></h3>
        <?php if ($treatment['excerpt']) {?>
          <p><?php echo $treatment['excerpt'] ?></p>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>