<?php add_action('amp_post_template_css', 'ampforwp_custom_style', 11);
function ampforwp_custom_style() {  
	global $redux_builder_amp;
	$get_customizer = new AMP_Post_Template( $post_id );
?>
/********************************************
    AMP BAREBONES CORE STYLESHEET 
*********************************************/
    /* Generic WP styling */
    .alignright {
        float: right;
    }
    .alignleft {
        float: left;
    }
    .aligncenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .amp-wp-enforced-sizes {
        max-width: 100%;
        margin: 0 auto;
    }
    .amp-wp-unknown-size img {
        object-fit: contain;
    }
    amp-iframe { max-width: 100%; margin-bottom : 20px; }
    .amp-wp-content,
    .amp-wp-title-bar div {
         margin: 0 auto;
     }
    html { }
    body {
        font-family: Serif;
        line-height: 1.75em;
    }
    p,
    ol,
    ul,
    figure {
        margin: 0 0 1em;
        padding: 0;
    }
    a, a:active, a:visited {
        color:#000;  
        text-decoration: none 
    }
    a:hover,
    a:active,
    a:focus {
    }
    /* Quotes */
    blockquote {
        background: rgba(127,127,127,.125);
        margin: 8px 0 24px 0;
        padding: 16px;
    }
    blockquote p:last-child {
        margin-bottom: 0;
    }
    /* UI Fonts */
    .amp-wp-meta,
    .amp-wp-header div,
    .amp-wp-title,
    .wp-caption-text,
    .amp-wp-tax-category,
    .amp-wp-tax-tag,
    .amp-wp-comments-link,
    .amp-wp-footer p,
    .back-to-top {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
    }
    /* Header */
    .amp-wp-header {
        margin-bottom:20px;
    }
    .amp-wp-header div {
        font-size: 1em;
        font-weight: 400;
        margin: 0 auto;
        max-width: calc(840px - 32px);
        padding: .875em 16px;
        position: relative;
    }
    .amp-wp-header a {
        text-decoration: none;
    }
    /* Site Icon */
    .amp-wp-header .amp-wp-site-icon {
        border-radius: 50%;
        position: absolute;
        right:60px;
        top: 15px;
        border:1px solid #eee;
    }
    /* Article */
    .amp-wp-article {
        font-weight: 400;
        margin: 1.5em auto;
        max-width: 840px;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }
    /* Article Header */
    .amp-wp-article-header {
        align-items: center;
        align-content: stretch;
        margin: 1.5em 16px 1.5em;
    }
    .amp-wp-title {
        display: block;
        flex: 1 0 100%;
        font-weight: 900;
        margin: 0;
        width: 100%;
    }
    /* Article Meta */
    .amp-wp-meta {
        display: inline-block;
        flex: 2 1 50%;
        font-size: .875em;
        line-height: 1.7em;
        margin: 0;
        padding: 0;
    } 
    .ampforwp-meta-info{
        margin-top: 0px;
    }
    .amp-wp-article-header .amp-wp-meta:last-of-type {
        text-align: right;
    }
    .amp-wp-article-header .amp-wp-meta:first-of-type {
        text-align: left;
    }
    .amp-wp-byline amp-img,
    .amp-wp-byline .amp-wp-author {
        display: inline-block;
        vertical-align: middle;
    }
    .amp-wp-byline amp-img {
        border-radius: 50%;
        position: relative;
        margin-right: 6px;
    }
    .amp-wp-posted-on {
        text-align: right;
    }
    /* Featured image */
    .amp-wp-article-featured-image {
        margin: 1.5em 16px 1.5em;
    }
    .amp-wp-article-featured-image amp-img {
        margin: 0 auto;
    }
    .amp-wp-article-featured-image.wp-caption .wp-caption-text {
        margin: 0 18px;
    }
    /* Front page */
    .amp-wp-frontpage .the_content {
        padding: 10px;
    }
    .amp-wp-frontpage .ampforwp-title {
        margin-left:10px;
    }
    /* Article Content */
    .amp-wp-article a{
        text-decoration:none
        font-weight:bold;
        border-bottom:1px solid #ccc;
    }
    .amp-wp-article-content {
        margin: 0 16px;
    }
    .amp-wp-article-content > ul,
    .amp-wp-article-content > ol {
        margin-left: 1em;
        font-size: 13px;
        /*font-weight: bold;*/
        list-style:none;
        position: relative;
    }
    .amp-wp-article-content > ul li,
    .amp-wp-article-content > ol li {
        margin-bottom: 1em;
    }
    .amp-wp-article-content > ul li:before {
        color: #94ADFF;
        content: '\25A0';
        position: absolute;
        left: -14px;
        margin-top: -2px;
    }
    .amp-wp-article-content amp-img {
        margin: 0 auto;
    }
    .amp-wp-article-content amp-img.alignright {
        margin: 0 0 1em 16px;
    }
    .amp-wp-article-content amp-img.alignleft {
        margin: 0 16px 1em 0;
    }
    /* Captions */
    .wp-caption {
        padding: 0;
    }
    .wp-caption.alignleft {
        margin-right: 16px;
    }
    .wp-caption.alignright {
        margin-left: 16px;
    }
    .wp-caption-text {
        font-size: 12px;
        line-height: 1.5em;
        margin: 0;
        padding: .66em 10px .75em;
        text-align: center;
    }
    /* AMP Media */
    amp-carousel {
        margin: 0 -16px 1.5em;
    }
    amp-iframe,
    amp-youtube,
    amp-instagram,
    amp-vine {
        margin: 0 -16px 1.5em;
    }
    .amp-wp-article-content amp-carousel amp-img {
        border: none;
    }
    amp-carousel > amp-img > img {
        object-fit: contain;
    }
    .amp-wp-iframe-placeholder {
        background-size: 48px 48px;
        min-height: 48px;
    }
    /* Article Footer Meta */
    .amp-wp-article-footer .amp-wp-meta {
        display: block;
    }
    .amp-wp-tax-category span{
        margin-right:5px;
    }
    .amp-wp-tax-category,
    .amp-wp-tax-tag {
        font-size: .875em;
        line-height: 1.5em;
        margin: 1.5em 16px;
    }
    .ampforwp-comment-button {
        margin-bottom:20px;
    }
    .amp-wp-comments-link {
        font-size: .875em;
        line-height: 1.5em;
        text-align: center;
        margin: 2.25em 0 1.5em;
    }
    .amp-wp-comments-link a {
        border-style: solid;
        border-width: 1px 1px 2px;
        border-radius: 4px;
        background-color: transparent;
        cursor: pointer;
        display: block;
        font-size: 14px;
        font-weight: 600;
        line-height: 18px;
        margin: 0 auto;
        max-width: 200px;
        padding: 11px 16px;
        text-decoration: none;
        width: 50%;
        -webkit-transition: background-color 0.2s ease;
        transition: background-color 0.2s ease;
    }
    .page-title {
        margin: 0 15px;
    }
    /* AMP Footer */
    .amp-wp-footer {
        margin: calc(1.5em - 1px) 0 0;
        padding-bottom:25px;
    }
    .amp-wp-footer div {
        margin: 0 auto;
        max-width: calc(840px - 32px);
        padding: 1.25em 16px 1.25em;
        position: relative;
    }
    .amp-wp-footer h2 {
        font-size: 1em;
        line-height: 1.375em;
        margin: 0 0 .5em;
    }
    .amp-wp-footer p {
        font-size: .8em;
        line-height: 1.5em;
        margin: 0 15px 0 0;
    }
    .amp-wp-footer a {
        text-decoration: none;
    }
    .copyright_txt{ float:left }
    .back-to-top { float:right }
	/* Header */
	.amp-wp-header .nav_container {
        float: right;
        top: -11px;
        line-height: 1;
        right: 60px;
	}
	.toggle-text  {
		position: absolute;
		right: 0;
        height: 22px;
        width: 28px;
	}
	.toggle-text span  {
        display: block;
        position: absolute;
        height: 2px;
        width: 25px;
        background: #ffffff;
        border-radius: 19px;
        opacity: 1;
        left: 0;
    }
	.toggle-text span:nth-child(2)  {
        top: 9px;
    }
	.toggle-text span:nth-child(3)  {
        top: 18px;
    }
	/* Homepage */
    .amp-wp-home .amp-wp-meta{
        margin:5px 0px
    }
	.amp-wp-home .amp-wp-content p {
		display: inline-block;
		width: 100%;
	}
	.ampforwp-custom-index .amp-wp-title a {
		text-decoration: none;
	}
	.amp-wp-meta {
		display: flex;
	}
	.amp-wp-posted-on {
		display: initial
	}
	.ampforwp-custom-index .amp-wp-content {
		margin-bottom: 30px;
	}
    .amp-wp-home .amp-loop-list amp-img {
        max-height: 250px;
    }
    .amp-wp-home .amp-loop-list amp-img > img {
        width: 100%;
        height: auto;
        min-height: auto;
    }
    .amp-wp-home.ampforwp-custom-index .amp-wp-content {
        margin-bottom: 0;
        margin-top: 30px;
    }
    /* Home Pagination */
    .pagination-holder{
        margin: 1.5em 16px 1.5em
    }
    #pagination .next {
        display: inline-block;
        float: right
    }
    #pagination .prev {
        display: inline-block;
    }
    .amp-wp-home .amp-wp-content p {
        display: inline;
    }
    .home-post-image {
        float: right ;
        margin: 0 0 10px 20px;
    }
	/* Single */
	.amp-wp-article-content amp-img {
		max-width : 100%;
	}
	.amp-wp-meta.amp-wp-tax-category,
	.amp-wp-meta.amp-wp-tax-tag {
		margin : 0
	}
	.amp-wp-meta.amp-wp-tax-tag  {
		display : initial
	}
	/* Social Icons */
    .ampforwp-social-icons{
        margin: 1.5em 16px 1.5em;
    }
	.whatsapp-share-icon {
	    width: 50px;
	    height: 20px;
	    display: inline-block;
	    background: #5cbe4a;
	    padding: 4px 0px;
	    position: relative;
	    top: -4px;
	    text-align: center
	}
    .comment-button-wrapper a{
        font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
        border-style: solid;
        border-color: #c2c2c2;
        border-width: 1px 1px 2px;
        border-radius: 4px;
        background-color: transparent;
        color: #0a89c0;
        cursor: pointer;
        display: block;
        font-size: 14px;
        font-weight: 600;
        text-align:center;
        line-height: 18px;
        margin: 0 auto;
        max-width: 200px;
        padding: 11px 16px;
        text-decoration: none;
        width: 50%;
        -webkit-transition: background-color 0.2s ease;
        transition: background-color 0.2s ease;
    }
	/* Related Posts */
    .relatedpost{
        margin: 2em 16px 2em;
    }
	main .amp-wp-content.relatedpost {
		background: none;
		box-shadow: none;
		max-width: 1030px;
	}
	.related_posts h3, .comments_list h3{
	    font-size: 14px;
	    font-weight: bold;
	    letter-spacing: 0.4px;
	    margin: 25px 0 10px 0;
	    color: #333;
	}
	.related_posts ol{
	    list-style-type:none;
	    margin:0;
	    padding:0;
        font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif
    }
	.related_posts ol li{
	    display:inline-block;
	    width:50%;
	    margin-bottom: 12px;
	    padding: 0px;
	}
    .related_link:before {
        content: 'Read next: ';
        opacity: .8;
    }
	.related_posts .related_link a{
	    font-size: 18px;
	}
	.related_posts ol li amp-img{
	    width:100px;
	    float:left;
	    margin-right:15px
	}
	.related_posts ol li p{
	    font-size: 12px;
	    color: #999;
	    line-height: 1.2;
	    margin: 12px 0 0 0;
	}
	.no_related_thumbnail{
	    padding: 15px 18px;
	}
	/* Comments */
    .amp-disqus-comments {
        padding: 15px;
    }
    .amp-disqus-comments amp-iframe{
        background: none;
    }
    .comments_list{
        margin: 2.5em 16px 2.5em
    }
	main .amp-wp-content.comments_list {
		background: none;
		box-shadow: none;
		max-width: 1030px;
	}
	.comments_list div{
	    display:inline-block;
	}
	.comments_list ul{
	    margin:0;
	    padding:0
	}
	.comments_list ul.children{
	    padding-bottom:10px;
		margin-left: 4%;
		width: 96%;
	}
	.comments_list ul li p{
        margin: 0;
        font-size: 14px;
        clear: both;
        padding-top: 5px;
	}
	.comments_list ul li{
        font-family:sans-serif;
	    font-size:11px;
	    list-style-type:none;
	    margin-bottom: 12px;
	    background: #fefefe;
	    -moz-border-radius: 2px;
	    -webkit-border-radius: 2px;
	    border-radius: 2px;
	    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.05);
	    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.05);
	    box-shadow: 0 2px 3px rgba(0,0,0,.05);
	    padding: 0px;
	    max-width: 1000px;
    	width:96%;
	}
    .comments_list ul li .says{
        margin-right: 4px;
    }
    .comments_list ul li p{
    font-family:'Merriweather', 'Times New Roman', Times, Serif
    }
	.comments_list ul li .comment-body{
	    padding: 10px 0px 15px 0px;
	}
	.comment-author{ float:left }
	.single-post footer.comment-meta{
	    /* float:right */
		padding-bottom: 0;
	}
    .single-post .amp-wp-article-header {
        text-align: center;
    }
	.comments_list li li{
	    margin: 20px 20px 10px 20px;
	    background: #f7f7f7;
	    box-shadow: none;
	    border: 1px solid #eee;
	}
	.comments_list li li li{
	    margin:20px 20px 10px 20px
	}
	/* Slide Navigation code */
	amp-sidebar {
	  width: 250px;
      transition: transition: all 0.5s ease-in, background 1s ease-in;
      transition-delay: 0.25s;
      opacity: 0;
      background: rgba(163, 182, 244, 0.8);
	}
    amp-sidebar[side][open] {
        background: rgba(0,0,0,.8);
        opacity: 1;
    }
    amp-sidebar[side] .burger-container .burger {
        width: 24px;
        height: 24px;
        margin: 20px auto 0;
    }
    amp-sidebar[side][open] .burger span:first-child {
/*        transition:all 1s cubic-bezier(0.4, 0.01, 0.165, 0.99);*/
        transform: translateY(4px) rotate(45deg);
    }
    amp-sidebar[side][open] .burger span:last-child {
        transform: translateY(3px) rotate(-45deg);
    }

	.amp-sidebar-image {
	  line-height: 100px;
	  vertical-align:middle;
	}
	.amp-close-image {
	   top: 15px;
	   left: 225px;
	   cursor: pointer;
	}
    .navigation_heading{
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255, 255, 255, 0.37);
        text-align: center;
    }
	.toggle-navigationv2 ul {
	    list-style-type: none;
	    margin: 0;
        font-family:sans-serif;
	    padding: 0;
	}
    .toggle-navigationv2 ul h6{
        padding:10px;
        text-decoration:none
    }
	.toggle-navigationv2 ul ul li a  {
	    padding-left: 35px;
	    background: #fff;
	    display: inline-block
	}
	.toggle-navigationv2 ul li a{
        padding: 10px 15px 10px 25px;
        width: 88%;
        display: inline-block;
        text-decoration: none;
        background: #fafafa;
        font-size: 13px;
        border-bottom: 1px solid #efefef;
	}
	.close-nav{
	    font-size: 12px;
        font-family: sans-serif;
	    background: rgba(0, 0, 0, 0.25);
	    letter-spacing: 1px;
	    display: inline-block;
	    padding: 10px;
	    border-radius: 100px;
	    line-height: 8px;
	    margin: 14px;
	    left: 191px;
	    color: #fff;
	}
	.close-nav:hover{
	    background: rgba(0, 0, 0, 0.45);
	}
	.toggle-navigation ul{
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    display: inline-block;
	    width: 100%
	}
	.menu-all-pages-container:after{
	    content: "";
	    clear: both
	}
	.toggle-navigation ul li{
	    font-size: 13px;
	    border-bottom: 1px solid rgba(0, 0, 0, 0.11);
	    padding: 11px 0px;
	    width: 25%;
	    float: left;
	    text-align: center;
	    margin-top: 6px
	}
	.toggle-navigation ul ul{
	    display: none
	}
	.toggle-navigation ul li a{
	    color: #eee;
	    padding: 15px;
	}
	.toggle-navigation{
	    display: none;
	    background: #444;
	}
	.nav_container:hover + .toggle-navigation,
	.toggle-navigation:hover,
	.toggle-navigation:active,
	.toggle-navigation:focus{
	    display: inline-block;
	    width: 100%;
	}
	/* Notifications */
    #amp-user-notification1 p {
        display: inline-block;
    }
    amp-user-notification {
        padding: 5px;
        text-align: center;
        background: #fff;
        border-top: 1px solid;
    }
    amp-user-notification button {
        padding: 8px 10px;
        margin-left: 5px;
            border: 0;
    }
    amp-user-notification button:hover {
        cursor: pointer
    }
    /* Advertisement */
    .amp-ad-wrapper {
        text-align: center
    }
    /* Sticky Social bar in Single */
    <?php if( $redux_builder_amp['enable-single-social-icons'] == true && is_single() )  { ?>
        body {
            padding-bottom: 43px;
        }
    <?php } ?>
    .sticky_social{
        width: 100%;
        bottom: 0;
        display: block;
        left: 0;
        box-shadow: 0px 4px 7px #000;
        background: #fff;
        padding: 7px 0px 0px 0px;
        position: fixed;
        margin: 0;
        z-index: 10;
        text-align: center;
    }
    .whatsapp-share-icon {
        width: 50px;
        height: 20px;
        display: inline-block;
        background: #5cbe4a;
        padding: 4px 0px;
        position: relative;
        top: -4px;
    }
    .amp-wp-author:before{
    }
    .amp-wp-tax-category span:first-child:after {
        content: ' ';
    }
    .amp-wp-tax-category span:after,
    .amp-wp-tax-tag span:after {
        content: ', ';
    }
    .amp-wp-tax-category span:last-child:after,
    .amp-wp-tax-tag span:last-child:after  {
        content: ' ';
    }
    pre {
        white-space: pre-wrap;
    }
    <?php if($redux_builder_amp['enable-single-social-icons']){ ?>
        .amp-wp-footer {
            padding-bottom: 60px;
        }
    <?php } ?>
    .amp-ad-wrapper.amp_ad_1 {
         padding-top : 20px;
    }
    <?php //RTL
    if( is_rtl() ) { ?>
    /* style for RTL languages */
    .amp-wp-header .amp-wp-site-icon{
        position: relative;
        float: left;
    }
    .amp-wp-header .nav_container{
        float: left;
        right: initial;
        left: -11px;
    }
    .amp-wp-header .amp-wp-site-icon{
        top: -3px;
        right: initial;
        left: -11px;
    }
    <?php } ?>




/********************************************
    **
    Custom Theme CSS for AMP
    NOTE: Enter your CSS below for the Custom AMP theme
    **
*********************************************/
	html {	
		background: #fff;
	}
	body {
		font-family: 'Rubik', -apple-system, Helvetica, Arial, serif;
		font-size: 16px;
		line-height:28px;
        -webkit-font-smoothing:antialiased;
	}
	.amp-wp-header {
		/*background-color: #fff;*/
        background-color: #94ADFF;
        color: #fff;
        text-align: center;
	}
	.amp-wp-header a{
		color: #fff;
		/*font-size: 17.5px;*/
        text-transform: uppercase;
        letter-spacing: 10px;
        font-size: 16px;
        font-weight: 500;
        position: relative;
        left:10px;
	}
	.toggle-text span  {
		background: #000;
		width: 22px;
    }
	.amp-wp-header .burger-container {
        position: absolute;
        /*display: inline-block;*/
        height: 100%;
        padding:0;
        top:0; left:0;
        width: 50px;
        cursor: pointer;
        transform: rotate(0deg);
        transition: all 0.3s cubic-bezier(0.4, 0.01, 0.165, 0.99);
        user-select: none;
        -webkit-tap-highlight-color: transparent;
	}
    .burger-container .burger {
        width: 18px;
        height: 8px;
        position: relative;
        display: block;
        margin: -4px auto 0;
        top: 50%;
    }
    .burger span {
        width: 100%;
        height: 1px;
        display: block;
        position: relative;
        background: #FFF;
        opacity: 0.5;
        transition: all 0.7s cubic-bezier(0.4, 0.01, 0.165, 0.99);
        transition-delay: .3s;
    }
    .burger span:first-child {
        transform: translateY(0px) rotate(0deg);
    }
    .burger span:last-child {
        transform: translateY(6px) rotate(0deg);
    }
	.amp-wp-article {
		margin-top: 0;
		margin-bottom:0;
	}
	/* Homepage */
	.amp-wp-article {
		max-width: 600px;
	}
	.amp-wp-header div {
		max-width: calc(600px - 32px);
		padding: 15px 16px 17px 16px;
	}
	.amp-wp-header {
		border-bottom: 1px solid #ededed
	}
	.home-post-image-big {
		margin-right: -16px;
		margin-left: -16px;
		margin-bottom: 16px;
	}
	.amp-wp-home .amp-wp-content p {
		margin: 0;		
		display: inline-block;
		font-size: 15px;
		line-height: 1.5;
        color:#666
	}
	.amp-loop-list {
		border-bottom: 1px solid #ededed;
		padding-bottom: 40px;
	} 
	.ampforwp-custom-index .amp-wp-content {
		margin-bottom: 30px;
		margin-top: 0;
		padding-bottom: 25px;
	}
	.amp-wp-content.pagination-holder {
		margin-top: -10px;
	}
	.comment-button-wrapper {
		margin-bottom: 40px;
	}
	/* Featured Area */
	.ampforwp-featured-holder {
		position: relative;		
		/*background: rgba(0,0,0,0.6);*/
		margin-bottom: 11px;
        align-content: stretch;
        min-height: 15px;
	}
	.amp-wp-title {	 
		/*color: #fff ;*/
		font-weight: 400;
		font-size: 30px;
		font-family: 'Playfair Display', 'Times New Roman', serif;
		line-height: 36px;
		margin-bottom: 10px;
        text-align: center;
	}

	.ampforwp-meta-info {	
		/*color: #fff ; */
	    display: block;
	    flex: 1 0 100%;
	}
	.ampforwp-meta-info span {
		color: #ccc;
		font-size: 14px;
		letter-spacing: 1.5px;
		text-transform:uppercase;
	}
	.amp-post-social-share {
		text-align: center; 
	} 
    .amp-post-social-share ul {
        margin: 1.5em 0;
    }
	.amp-post-social-share li{
		display: inline-block;
	}
	.amp-post-social-share li.twitter{
		margin-right:  10px;
	}
	.amp-post-social-share li a { 
        display: inline-block;
		color: #fff;
		font-size: 16px;
		padding: 8px 15px 8px 40px;
        /*border-radius: 6px;*/
        text-transform: uppercase;
        font-size: 12.5px;
        letter-spacing: 1.3px;
        font-weight: bold;

	}
	.amp-post-social-share li.twitter a {
		background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%22-49%20141%20512%20512%22%3E%3Cpath%20fill%3D%22%2355acee%22%20d%3D%22M432.9%2C256.9c-16.6%2C7.4-34.5%2C12.4-53.2%2C14.6c19.2-11.5%2C33.8-29.7%2C40.8-51.3c-17.9%2C10.6-37.8%2C18.4-58.9%2C22.5%20c-16.9-18-41-29.2-67.7-29.2c-51.2%2C0-92.7%2C41.5-92.7%2C92.7c0%2C7.2%2C0.8%2C14.3%2C2.4%2C21.1c-77-3.9-145.3-40.8-191.1-96.9%20C4.6%2C244%2C0%2C259.9%2C0%2C276.9C0%2C309%2C16.4%2C337.4%2C41.3%2C354c-15.2-0.4-29.5-4.7-42-11.6c0%2C0.4%2C0%2C0.8%2C0%2C1.1c0%2C44.9%2C31.9%2C82.4%2C74.4%2C90.9%20c-7.8%2C2.1-16%2C3.3-24.4%2C3.3c-6%2C0-11.7-0.6-17.5-1.7c11.8%2C36.8%2C46.1%2C63.6%2C86.6%2C64.4c-31.8%2C24.9-71.7%2C39.7-115.2%2C39.7%20c-7.5%2C0-14.8-0.4-22.2-1.3c41.1%2C26.4%2C89.8%2C41.7%2C142.2%2C41.7c170.5%2C0%2C263.8-141.3%2C263.8-263.8c0-4.1-0.1-8-0.3-12%20C404.8%2C291.8%2C420.5%2C275.5%2C432.9%2C256.9z%22%2F%3E%3C%2Fsvg%3E') #fff no-repeat 13px 9px;
		background-size: 22px;
        color:#55acee;
        box-shadow: 0 7px 15px rgba(85, 172, 238, 0.2);
        border-color:rgba(85, 172, 238, 0.2);
	}
	.amp-post-social-share li.facebook a {
		background: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%233b5998%22%20d%3D%22M211.9%20197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0%200%200-22.1%200-33.7%200-13.9%202.8-19.5%2016.3-19.5%2010.9%200%2038.2%200%2038.2%200V82.9c0%200-40.2%200-48.8%200%20-52.5%200-76.1%2023.1-76.1%2067.3C211.9%20188.8%20211.9%20197.4%20211.9%20197.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E') #fff no-repeat 10px 8px;
		background-size: 24px;
        color:#3b5998;
        box-shadow: 0 7px 15px rgba(59, 89, 152, 0.2);
        border-color:rgba(59, 89, 152, 0.2);
	}
	/* Related Posts */
	.ampforwp-custom-related-post .relatedpost:before {
        content: " Recommended";
        font-weight: 700;
        font-size: 24px;
        line-height: 2;
        text-align: center;
        font-family: 'Playfair Display';
        width: 100%;
        display: block;
        margin-bottom: 1rem;
        font-weight: normal;
	}
	.ampforwp-custom-related-post ol {
		display: flex;
	    flex-wrap: wrap;
	}
	.ampforwp-custom-related-post h3 {
		display: none;
	}
	.related_posts ol li{
        display: inline-block;
        width: 100%;
        padding: 0px;
        margin: 0;
        overflow: hidden;
        position: relative;
        padding-bottom: 33%;
        background: #f7f7f7;
        /*border: 1px solid #000;*/
	}
	.related_posts .related_link a  {
		font-size: 14px;
	}
	.related_posts ol li amp-img {
        position: absolute;
        width: 100%;
        height: auto;
        filter: blur(6px);
        opacity: 0.7;
        transform: scale(1.4);
	}
	.related_posts ol li p {
		display: none
	}
	.related_posts ol li amp-img {
		margin-right: 8px;
	}
/*	.related_posts ol li:nth-of-type(2n) amp-img{
		margin:0px 0px 0px 8px ;
	}*/
/*	.related_posts ol li:nth-of-type(2n) .related_link{
		margin:0px 0px 0px 8px ;
	}
*/	.related_link {
		line-height: 1.1;
        position: absolute;
        bottom: 50%;
        margin-bottom: -.5em;
        margin-top: 10px;
        font-weight: bold;
        text-align: center;
        width: 100%;
        font-size: 14px;
	}
	.comment-button-wrapper a {
		background: #3c3c3c;
		border-radius: 50em;
		border:0;
		color: #fff;
	}
    /* Archive */
    .archive-page-title{
        margin:25px 25px 10px 25px;
    }
    .post_category {
       position: absolute; 
       bottom: -15px;
       text-align: center;
       width:100%;
    }
    a.post_category_name {
        background: #000;
        color: #fff;
        margin: 0 auto;
        width: auto;
        display: inline-block;
        padding: 0px 14px;
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 400;  
    }
	/* Footer */
	#footer{
		border-top:1px solid #ddd;
	    background : #fff;
	    font-size: 13px;
	    text-align: center;
	    letter-spacing: 0.2px;
	    line-height:1;
	    padding: 20px 0;
	} 
	#footer p{
	    margin: 0
	}
    .amp-wp-article-content p{
        margin-top: -2px;
        padding-right: 6px;
        font-size: 13px;
        color: #353535;
    }
    .amp-wp-article-content blockquote {
        margin: 8px 0 24px 0;
        border: 2px solid;
        padding: 16px;
        font-family: 'Playfair Display';
        color: #94adff;
        position: relative;
        font-style: italic;
        background: none;
    }
    .amp-wp-article-content blockquote:before {
        content: '\201E';
        position: absolute;
        top: -65px;
        font-size: 106px;
        font-style: normal;
        right: 7%;
    }
    .amp-wp-article-content blockquote > p:first-child {
        font-size: 26px;
        color: #94adff;
        line-height: 36px;
    }
    .amp-wp-article-content h4,.amp-wp-article-content h5,.amp-wp-article-content h6 {
        position: relative;
        text-transform: uppercase;
        background: #fff;
        display: inline;
        z-index: 1;
        letter-spacing: 3px;
        font-weight: normal;
        border-bottom: 2px solid #94adff;
    }
    
    .amp-wp-article-content h2, .amp-wp-article-content h3 {
        position: relative;
        text-align: center;
        margin: 15px 10% 40px;
    }
    .amp-wp-article-content em {
        font-family: 'Playfair Display';
        font-weight: 700;
    }
    .amp-wp-article-content h2:before, .amp-wp-article-content h3:before {
        content: ' ';
        position: absolute;
        bottom: -22px;
        background: #94adff;
        height: 3px;
        width: 30%;
        display: block;
        left: 35%;
    }
    .amp-carousel-button {
        background-color: rgba(148, 173, 255, 0.7);
        border-radius:50rem;
    }
    .amp-wp-article-content > *
    .toggle-text span:nth-child(2){
        top: 7px;
    }
    .toggle-text span:nth-child(3){
        top:14px;
    }
    .button, button.button, input[type="submit"].button {
        display: inline-block;
        padding: 8px 15px 8px 15px;
        text-transform: uppercase;
        font-size: 12.5px;
        letter-spacing: 1.3px;
        font-weight: bold;
        margin-bottom:1em;
        border:1px solid transparent;
    }
    a.button-outlined {
        border-color: #ccc;
    }
    a.button-cta {
/*        background: #94adff;
        border-color:#94adff;*/
        background: #000;
        border-color:#000;
        color:#fff;
        padding:8px 30px;
    }
    .text-center {
        text-align:center;
    }
    .menu .menu-item {
        padding: 20px 10px;
        text-align: center;
        border-bottom: 1px solid rgba(255,255,255,.1);
        margin: 0;
        font-size: 1.2em;
    }
    .menu .menu-item > a {
        color: #fff;
        font-family: 'Playfair Display';
        font-weight: normal;
        border-bottom: 1.5px solid rgb(148, 173, 255);
    }
    .menu .menu-item.menu-item-has-children:before {
        content: ' ';
        position: absolute;
        display: block;
        height: 20px;
        margin-top: 10px;
        width: 20px;
        font-weight: 300;
        font-size: 1.2em;
        right: 15px;
        background: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MDQuMjU3IDQwNC4yNTciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQwNC4yNTcgNDA0LjI1NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8cG9seWdvbiBwb2ludHM9IjM4Ni4yNTcsMTE0LjMzMSAyMDIuMTI4LDI1Mi40MjcgMTgsMTE0LjMzMSAwLDEzOC4zMzEgMjAyLjEyOCwyODkuOTI3IDQwNC4yNTcsMTM4LjMzMSAiIGZpbGw9IiNGRkZGRkYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==) no-repeat;
        z-index: 9999;
        overflow: hidden;
    }
    .menu section amp-accordion section {
        background:rgba(255, 255, 255, 0.1);
    }
    .menu section amp-accordion section .menu-item:before {
        /*content: '\2014 \00a0';*/
        /*color: #777;*/
        /*font-size: 1.2em;*/
    }
    .menu section amp-accordion section  div .menu-item {border:none;}
    .menu section amp-accordion section  div .menu-item > a {
        font-family: 'Rubik' !important;
        font-size: .85em;
        bordeR: none;
        text-align: left;
    }
    @media screen and (max-width: 1200px) and (min-width: 600px) {
        .related_posts ol li:nth-of-type(2n) amp-img{
            margin:0px 15px 0px 0px ;
        }
        .related_posts ol li:nth-of-type(2n) .related_link{
            margin:0px 15px 0px 0px ;
        }	
    }
    @media screen and (max-width: 600px){
        .amp-wp-header{ margin-bottom:0 }
    }
    @media screen and (max-width: 450px) and (min-width: 320px) {
        .amp-post-social-share amp-social-share {
            padding: 0 20px;
        }
        .amp-wp-title {
            /*font-size: 24px;*/
            line-height:28px; 
        } 
        .single-post .awp-wp-title {
            font-size:36px ;
        }
        .ampforwp-meta-info span {
            font-size: 12px;
        }
    }



    /* Custom CSS Code from Options Panel */
	<?php echo $redux_builder_amp['css_editor']; ?>

<?php } ?>