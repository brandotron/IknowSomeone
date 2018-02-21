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
<h1>CXV In The News</h1>

<!-- BEGIN Conference Calls -->
	<?php
$rows = array_reverse(get_field('cxv_in_the_news'));
if($rows)
{
	echo '<br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<!-- END Conference Calls -->


<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
