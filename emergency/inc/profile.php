<section class="column column--bg-one column--center">
  <div class="column__inner">
    <div class="column__heading">
      <h2><?php echo $profile_heading ?></h2>
    </div>

    <?php 
    
    $count = 0;
    
    foreach($profiles as $profile) { 
      
    $count ++;   
    
    ?>
      
      <article class="column__border <?php echo ($count % 2 == 1) ? "column--odd" : "column--even" ?>">

        <div class="column__body">
          <h3><strong><?php echo $profile['name'] ?></strong></h3>
          <?php if ($profile['quals']) {?>
            <h4><?php echo $profile['quals'] ?></h4>
          <?php } ?>
          <?php if ($profile['gdc']) {?>
            <h5>GDC: <a href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=<?php echo $profile['gdc'] ?>" target="_blank" rel="noopener noreferrer"><?php echo $profile['gdc'] ?></a></h5>
          <?php } ?>
          <?php if ($profile['intro']) {?>
            <?php echo $profile['intro'] ?>
          <?php } ?>
          <?php if ( $profile['excerpt'] ) { ?>
            <div class="more">
              <span class="more__text" id="profile-<?php echo $count ?>"><?php echo $profile['excerpt'] ?></span>
            </div>
          <?php } ?>
          
          <?php if ( $profile['excerpt'] ) { ?>
            <button class="more__button" data-toggle="collapse" data-target="#profile-<?php echo $count ?>">Read more</button>
          <?php } ?>

        </div>


        <picture class="column__media column__media--profile">

            <source type="image/webp" media="(min-width: 576px)" srcset="<?php echo convert_img('./img/' . $profile['img'] . '.jpg','./img/' . $profile['img'] . '.webp', 100); ?>">
            <source type="image/jpg" media="(min-width: 576px)" srcset="./img/<?php echo $profile['img'] ?>.jpg">

            <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo convert_img('./img/' . $profile['img'] . '-sm.jpg','./img/' . $profile['img'] . '-sm.webp', 100); ?>">
            <source type="image/jpg" media="(max-width: 575px)" srcset="./img/<?php echo $profile['img'] ?>-sm.jpg">

            <img src="./img/<?php echo $profile['img'] ?>.jpg" alt="<?php echo $profile['name'] ?>" width="550" height="550" loading="lazy" decoding="async">

        </picture>

      </article>
    
    <?php } ?>

    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>

      
  </div>
</section>