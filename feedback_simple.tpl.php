<?php
/**
 * @file
 * Template file.
 *
 * @param $link: link path.
 * @param $align: left or right.
 * @param $top: distance from the top; include unit.
 * @param $alt: alt text.
 * @param $image: image path.
 * @param $height: image height; include unit.
 * @param $width: image width; include unit.
 */
?>
<div id='feedback_simple'>
  <a
    href='<?php print $link ?>'
    class='feedback_simple-<?php print $align ?>'
    style='top: <?php print $top ?>; height: <?php print $height ?>; width: <?php print $width ?>;'>
      <img
        alt='<?php print $alt ?>'
        src='<?php print $image ?>'
        height='<?php print $height ?>'
        width='<?php print $width ?>' />
  </a>
</div>
