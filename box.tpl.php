  <div class="box">
    <?php
      if ($title) {
        print '<h2 class="title">';
        print $title;
        print '</h2>';
      }
    ?>
    <div class="content"><?php print $content; ?></div>
  </div>

