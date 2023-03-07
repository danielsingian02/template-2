<?php /* Template Name: Page Template*/ 
get_header();?> 
<p>hello world</p>

<?php $image = get_field('page_hero');?>
<img src="<?php echo $image;?>">
<?php
 the_field('page_title'); 

 get_footer(); 
the_content();