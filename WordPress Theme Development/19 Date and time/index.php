<?php
// ===============================
// Date and Time
// ===============================

<p><i class="fas fa-calendar-alt"></i> <?php echo the_time('D, j - F Y'); ?> <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a'); ?></p>

// Date and Time Format PHP Structure
<?php echo the_time(); ?> ⇒ 9:30am
<?php echo the_time(’g:i a’); ?> ⇒ 9:30am ⇒ Default
<?php echo the_time(’G:i’); ?> ⇒ 9:30
<?php echo the_time(’F j, Y’); ?> ⇒ March 15, 2022
<?php echo the_time(’F j’); ?> ⇒ March 15
<?php echo the_time('j F'); ?> ⇒ 15 March
<?php echo the_time('j M'); ?> ⇒ 15 Mar ⇒ It will only show first 3 letter
<?php echo the_time('j m'); ?> ⇒ 15 03 ⇒ Month Number
<?php echo the_time('j n'); ?> ⇒ 15 3 ⇒ Month Number without zero
<?php echo the_time('d n'); ?> ⇒ 15 3 ⇒ Day number with zero, "j" do not show zero
<?php echo the_time('D n'); ?> ⇒ Thesday 3 ⇒ Day name
