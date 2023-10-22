<section class="column">
  <div class="column__inner">
    <div class="column__heading column__heading--results">
      <h2><?php echo $results_heading ?></h2>
      <?php if ($results_lead) { ?>
      <?php echo $results_lead ?>
      <?php } ?>
    </div>
    <ul class="column__list">
      <?php foreach($results as $result) { ?>
      <li class="column__cell">
        <figure class="column__img column__img--result">

          <picture>

            <source type="image/webp" media="(min-width: 576px)" srcset="<?php echo convert_img('./img/' . $result['img'] . '.jpg','./img/' . $result['img'] . '.webp', 100); ?>">
            <source type="image/jpg" media="(min-width: 576px)" srcset="./img/<?php echo $result['img'] ?>.jpg">

            <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo convert_img('./img/' . $result['img'] . '-sm.jpg','./img/' . $result['img'] . '-sm.webp', 100); ?>">
            <source type="image/jpg" media="(max-width: 575px)" srcset="./img/<?php echo $result['img'] ?>-sm.jpg">

            <img src="./img/<?php echo $result['img'] ?>.jpg" alt="<?php echo $result['title'] ?>" width="550" height="550" loading="lazy" decoding="async">

          </picture>

          <figcaption class="column__caption"><?php echo $result['title'] ?></figcaption>

        </figure>
        
      </li>
      <?php } ?>
    </ul>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>