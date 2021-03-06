<?php global $redux_builder_amp;  ?>
<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org">
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
	<?php $this->load_parts( array( 'style' ) ); ?>
	<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>
<body class="single-post">
<?php $this->load_parts( array( 'header-bar' ) ); ?>

<?php do_action( 'ampforwp_after_header', $this ); ?>
	<main>
		<article class="amp-wp-article">
			<?php do_action('ampforwp_post_before_design_elements') ?>

<!-- Featured Image Starts -->  
				
						<div class="ampforwp-featured-holder">
						<?php if ( has_post_thumbnail() ) { 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
						$thumb_url = $thumb_url_array[0]; ?>
							<amp-img
							    src="<?php echo $thumb_url ?>"		   
							    width="<?php echo $thumb_url_array[1] ?>"
							    height="<?php echo $thumb_url_array[2] ?>"
							    layout="responsive"
							    alt="an image">
							</amp-img>
							<?php } ?>
							<div class="post_category">
								<?php $categories = get_the_category();
								if ( ! empty( $categories ) ) {
								    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="post_category_name">' . esc_html( $categories[0]->name ) . '</a>';
								}?>
							</div>
						</div>
						<header class="amp-wp-article-header ampforwp-title">
                            <h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
							<?php $post_author = $this->get( 'post_author' ); if ( $post_author ) : ?>
								<div class="ampforwp-meta-info">							
									<span>
                                        By <?php echo esc_html( $post_author->display_name ); ?> &#183; <?php echo get_the_date(); ?> &#183;
                                     
                                    </span>
								</div>
							<?php endif; ?>
						</header>
						
<!-- Featured Image Ends -->  

<!-- Social Sharing Starts -->  
				<div class="amp-post-social-share">
					<ul>
						<li class="twitter"><a href="https://twitter.com/intent/tweet?status=<?php echo wp_kses_data( $this->get( 'post_title' ) ); ?> <?php echo wp_kses_data( get_permalink() ) . AMP_QUERY_VAR ; ?>">Tweet This</a></li> 
						<li class="facebook"><a href="https://www.facebook.com/share.php?u=<?php echo wp_kses_data( get_permalink() ) . AMP_QUERY_VAR ; ?>&t=<?php echo $this->get( 'post_title' ); ?>">Share This</a></li>
					</ul>					
				</div>
<!-- Social Sharing Ends -->  
            
<!-- Article Content Starts -->  
				<div class="amp-wp-article-content">
                    <?php do_action('ampforwp_inside_post_content_before'); 
						$amp_custom_content_enable = get_post_meta( $this->get( 'post_id' ) , 'ampforwp_custom_content_editor_checkbox', true);

						// Normal Front Page Content
						if ( ! $amp_custom_content_enable ) {
							echo $this->get( 'post_amp_content' ); // amphtml content; no kses
						} else {
							// Custom/Alternative AMP content added through post meta  
							echo $this->get( 'ampforwp_amp_content' );
						} 
						
					do_action('ampforwp_inside_post_content_after') ?>
<!-- Social Sharing Starts -->  
					<div class="amp-post-social-share">
						<ul>
							<li class="twitter"><a href="https://twitter.com/intent/tweet?status=<?php echo wp_kses_data( $this->get( 'post_title' ) ); ?> <?php echo wp_kses_data( get_permalink() ) . AMP_QUERY_VAR ; ?>">Tweet This</a></li> 
							<li class="facebook"><a href="https://www.facebook.com/share.php?u=<?php echo wp_kses_data( get_permalink() ) . AMP_QUERY_VAR ; ?>&t=<?php echo $this->get( 'post_title' ); ?>">Share This</a></li>
						</ul>					
					</div>
<!-- Social Sharing Ends -->  
				</div>
<!-- Article Content Ends -->  

<!-- Related Posts Start -->  
				<div class="ampforwp-custom-related-post">
					<?php $this->load_parts( array( 'ampforwp-related-posts' ) ); ?>
				</div>
<!-- Related Posts End -->  

<!-- Call-to-action Buttons Start -->  
				<div class="text-center">
					<?php if ( comments_open() ) { ?>
					   	<a class="button button-outlined" href="<?php echo get_permalink().'#commentform' ?>"> Leave a Comment </a>
					<?php } ?>
				    <a class="button button-cta" href="<?php echo get_permalink() ?>"> Full Version </a>
				</div>	
<!-- Call-to-action Buttons End -->  
			<?php do_action('ampforwp_post_after_design_elements') ?>
		</article>
	</main>
<?php $this->load_parts( array( 'footer' ) ); ?>
<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>