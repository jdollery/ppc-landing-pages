<section class="column column--bg-two column--center">
  <div class="column__inner">
    <div class="column__heading">
      <h2><?php echo $steps_heading ?></h2>
      <?php if ($steps_lead) { ?>
      <?php echo $steps_lead ?>
      <?php } ?>
    </div>
    <ul class="column__list">
      <?php foreach($steps as $step) { ?>
      <li class="column__cell">

        <picture class="column__img">

          <source type="image/webp" media="(min-width: 576px)" srcset="<?php echo convert_img('./img/' . $step['img'] . '.jpg','./img/' . $step['img'] . '.webp', 100); ?>">
          <source type="image/jpg" media="(min-width: 576px)" srcset="./img/<?php echo $step['img'] ?>.jpg">

          <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo convert_img('./img/' . $step['img'] . '-sm.jpg','./img/' . $step['img'] . '-sm.webp', 100); ?>">
          <source type="image/jpg" media="(max-width: 575px)" srcset="./img/<?php echo $step['img'] ?>-sm.jpg">

          <img src="./img/<?php echo $step['img'] ?>.jpg" alt="<?php echo $step['title'] ?>" width="800" height="800" loading="lazy" decoding="async">

        </picture>

        <h3 class="column__title"><?php echo $step['title'] ?></h3>
        <?php if ($step['excerpt']) {?>
          <p><?php echo $step['excerpt'] ?></p>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>