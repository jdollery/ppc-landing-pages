<?php if ($reviews) { ?>
  <ul class="column__list column__list--review">

    <?php 

    $count = 0;
    
    foreach($reviews as $review) { 

    $count ++;
      
    ?>

    <li class="column__review<?php if (sizeof($reviews) > 1) { ?> column__review--multi<?php } ?>">
      <div class="review">
        <div class="review__body">
          <a href="<?php echo $review['link'] ?>" target="_blank" rel="noopener noreferrer">
            <h4 class="review__author"><?php echo $review['author'] ?></h4>
            <span class="icon icon--stars"><svg role="img"><use xlink:href="#stars" href="#stars"></use></svg></span>
          </a>

          <?php if ($review['more']) { ?>
            <?php echo $review['excerpt'] ?>
            <div class="more"><span class="more__text" id="more-<?php echo $count ?>"><?php echo $review['more'] ?></span></div>
            <button class="more__button" data-toggle="collapse" data-target="#more-<?php echo $count ?>">Read more</button>
          <?php } else { ?>
            <?php echo $review['excerpt'] ?>
          <?php } ?>

        </div>
        <div class="review__footer">
          <a class="review__logo" href="<?php echo $review['link'] ?>" target="_blank" rel="noopener noreferrer">
            <span>Posted on</span>
            <img src="./img/google-logo.svg" alt="Google Logo" width="120" height="39">
          </a>
        </div>
      </div>
    </li>

    <?php } ?>
    
  </ul>

<?php } ?>