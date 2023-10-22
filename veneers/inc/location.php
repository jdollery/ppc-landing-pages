<section class="location location--bg-two">
  <div class="location__inner">
    <div class="location__body">
      <div class="location__opening">
        <h4 class="location__heading">Opening Times</h4>
        <ul class="location__list">
          <?php foreach($opening as $open) { ?>
          <li><?php echo $open['day'] ?>: <?php echo $open['time'] ?></li>
          <?php } ?>
        </ul>
        <p><?php echo $opening_extra ?></p>
      </div>
      <div class="location__map" id="map"></div>
    </div>
  </div>
</section>