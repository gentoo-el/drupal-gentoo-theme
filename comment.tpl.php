  <div class="comment<?php print ' '. $status; ?>">
    <?php
      if ($picture)
        print $picture;
    ?>
    <h3 class="title"><?php print $title; ?></h3>
    <?php if (!empty($new)) { ?>
      <span class="new"><?php print $new; ?></span>
    <?php } ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <div class="content">
      <?php print $content; ?>
      <?php
        // 84861 - last comment id in drupal 5 while $signature was not dynamic
        if ($signature && $comment->cid > 84861) {
      ?>
        <div class="clear-block">
          <div>—</div>
          <?php print $signature; ?>
        </div>
      <?php } ?>
    </div>
    <div class="links">&raquo; <?php print $links; ?></div>
  </div>
