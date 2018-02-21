<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<h1>Press Releases</h1>
<!-- BEGIN 2016 -->
	<?php
$rows = array_reverse(get_field('2016-press-releases'));
if($rows)
{
	echo '<h3>2016</h3><br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<!-- END 2016 -->

<!-- BEGIN 2015 -->
	<?php
$rows = array_reverse(get_field('2015_press_releases'));
if($rows)
{
	echo '<hr><h3>2015</h3><br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<!-- END 2015 -->

<!-- BEGIN 2014 -->
	<?php
$rows = array_reverse(get_field('2014_press_releases'));
if($rows)
{
	echo '<hr><h3>2014</h3><br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<!-- END 2014 -->

	

<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
