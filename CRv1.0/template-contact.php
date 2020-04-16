<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header();?>
<section class="wrapper">
  <div class="container">
    <h1>
      <?php the_title();?>
    </h1>
    <div class="row">
      <div class="col-lg-6">
        <h3>This is where the contact form goes</h3>
      </div>
      <div class="col-lg-6">
        <?php get_template_part('includes/section', 'content');?>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>