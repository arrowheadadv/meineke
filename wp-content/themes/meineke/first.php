<?php /* Template Name: Homepage */ get_header(); 
$featured = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
$homegirl = get_field('image');
$coupon_cat = get_categories('taxonomy=coupons_category&post_type=coupons&hide_empty=0'); 
echo '<pre>',var_dump($coupon_cat),'</pre>';
?>
<script>
$(document).ready(function(){
	$('ul.home-specials li:first-child').addClass('active');
});
</script>
	
<div class="splash home" style="background: url('<?php echo $featured; ?>') no-repeat;">
		<div class="wrap clearfix home-splash" style="background: url('<?php echo $homegirl; ?>') right no-repeat;">
			<p class="lato size-86 white"><i>my <span class="bold">meineke</span> gets me...<br /> <span class="bold yellow size-97">back to my life.</span></i></p><br />
			<select name="" class="left oil-change">
			<option>I Need To Change My Oil</option>
		</select>
		</div>
</div>
<div class="clearfix wrap">
<aside class="left scheduler">
	<ul class="home-specials">
		<?php foreach ($coupon_cat as $cat): 
			echo '<li data-id="'.$cat->cat_ID.'">'.$cat->name.'</li>';
		endforeach;
		?>
	</ul>
	<div class="schedule">
		<h2 class="center">Schedule An <span class="yellow size-30">Appointment</span></h2>
		<p class="center">Fill out the form to schedule an appointment to come in. You will receive an email after we've confirmed the time and date.</p>
		<form action="">
			<input type="text" placeholder="Full Name">
			<input type="text" placeholder="Email Address">
			<input type="text" placeholder="Phone Number">
			<select>
				<option value="">Best Time to reach you</option>
			</select>
			<input type="submit" class="submit-form" value="SUBMIT FORM">
		</form>
	</div>
	<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" class="fb"></a>
	<p>*To Receive special offers only our Facebook memebers have access to.</p>
</aside>
<section class="right content seventy">
		<h1><?php the_field('coupon_title'); ?></h1>
		<?php the_field('coupon_description'); ?>

		<div class="clearfix" id="home-coupons">
			<?php  
			$loop = new WP_Query(array(
	        'post_type' => 'coupons',
	        'posts_per_page' => -1,
	        'orderby'=> 'title',
	        'order' => 'ASC',
	        'tax_query' => array(
					'taxonomy' => 'coupons_category',
					'field' => 'slug',
					'terms' => 'meineke-difference'
				)
			)); 
			while ( $loop->have_posts() ) : $loop->the_post(); 
				$price = get_field('price_image', $loop->ID);
				$print = get_field('print', $loop->ID);
				$product = get_field('product_box_image', $loop->ID);
			?>
				<div class="fourty9 left box center">
				<h1><?php the_title(); ?></h1>
				<p class="center"><img src="<?php echo $price; ?>" alt=""></p>
				<?php the_content(); ?>
				<p class="center"><a href="<?php echo $print; ?>">Print Coupon</a> <a href="#">More Details</a></p>
				<p class="center"><img src="<?php echo $product; ?>" alt="Filter"></p>
				</div>
			<?php endwhile; ?>
		</div>

</section>
</div>

<?php get_footer(); ?>