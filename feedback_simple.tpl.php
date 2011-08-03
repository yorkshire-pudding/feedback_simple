<?php
/**
 * @file
 * Template file.
 *
 * @param $link: path.
 * @param $align: left or right.
 * @param $top: distance from the top; include unit.
 * @param $alt: alt text.
 * @param $image: path to image.
 * @param $height: height of image; include unit.
 * @param $width: width of image; include unit.
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
