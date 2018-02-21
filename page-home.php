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

<div class="row convaloinfo">
	<div class="col-sm-12">&nbsp;</div>
    <div class="col-sm-12">
    	<div class="col-sm-4">
        <?php if( get_field('center_box_left') ): ?>
		<?php the_field('center_box_left'); ?>
		<?php endif; ?>
    	</div>
        <div class="col-sm-4">
        <?php if( get_field('center_box_middle') ): ?>
		<?php the_field('center_box_middle'); ?>
        <?php endif; ?>
    	</div>
        <div class="col-sm-4">
      	<hr /><h3>Market Information</h3>
				<?php
            include_once('class.yahoostock.php');
             
            $objYahooStock = new YahooStock;
             
            /**
                Add format/parameters to be fetched
                
                s = Symbol
                n = Name
                l1 = Last Trade (Price Only)
                d1 = Last Trade Date
                t1 = Last Trade Time
                c = Change and Percent Change
                v = Volume
             */
            $objYahooStock->addFormat("pj1j2"); 
             
            /**
                Add company stock code to be fetched
                
                msft = Microsoft
                amzn = Amazon
                yhoo = Yahoo
                goog = Google
                aapl = Apple	
             */
            $objYahooStock->addStock("CXV.V");
			

            /**
             * Printing out the data
             */
            foreach( $objYahooStock->getQuotes() as $code => $stock)
            {
                ?>
                <ul>
                <li>CXV.V:TSXv</li>
                <li>Previous Close: $<?php echo $stock[0]; ?>
                <a href="#stockchart" class="btn btn-primary btn-sm" style="color:#FFFFFF;" data-toggle="collapse">See Chart</a></li>
                <li>Market Cap: $<?php echo $stock[1]; ?></li>
                <li>Shares Outstanding: <?php $float = $stock[2];
				echo number_format($float); ?></li>
                </ul>
                <?php
            }
            ?>
            <img id="stockchart" src="https://www.google.com/finance/getchart?q=CXV&p=12M&x=CVE&i=86400" class="collapse" />
        </div>
    </div>
</div>
<div class="row">
	<div class="col-lg-12"><hr></div>
</div>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>
    
<!-- BEGIN ACQUIRED BUSINESSES -->
	<?php
$rows = get_field('acquired_businesses');
if($rows)
{
	echo '<hr><h3>Acquired Businesses</h3><br>';

	foreach($rows as $row)
	{
		echo '<div class="col-sm-4" style="min-height:260px;">' . $row['facility_hyperlink_image'] . '' . $row['business_name_&_description'] .'</div>';
	}

	echo '';
}
?> 
<!-- END ACQUIRED BUSINESSES -->

<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
