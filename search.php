<?php
   /**
    * Displaying Search Results pages.
    *
    */
   get_header();
   $queried_object = get_queried_object();
   $category_name = $queried_object->cat_name;
   
   $query = new WP_Query( array( 'category__in' => get_queried_object_id() ) );
   
   $langFolder = "template-parts/fragments/product/product";
   $homeText = "Tan Minh Giang Oil";
   $category_name = "Product";
   $alert="Sorry, but nothing matched your search criteria. Please try again with some different keywords."; 
   $text_search="Search Results for:";
   if (get_locale() == "vi") {
       $langFolder = "template-parts/vi/fragments/product/product";
       $homeText = "Tân Minh Giang Oil";
       $category_name = "Sản phẩm";
       $alert="Xin lỗi,kết quả không tìm thấy. Vui lòng thử lại từ khóa khác.";
       $text_search="Kết quả tìm cho:";
   } ?>
<div class="container-fluid breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <a href="<?php echo get_home_url(); ?>"><?php echo $homeText; ?></a>
            &gt;
            <?php echo $category_name; ?>
         </div>
         <div class="col-md-2 text-right">
            <i class="shareSocialIcon fab fa-facebook"></i>
            <i class="shareSocialIcon fas fa-share-alt"></i>
         </div>
      </div>
   </div>
</div>
<section id="primary" class="content-area">
   <div id="content" class="site-content" role="main">
      <div class="container-fluid postList">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <?php get_template_part( $langFolder, 'category-menu'); ?>
               </div>
               <div class="col-md-9">
                  <?php
                     $s=get_search_query();
                     $args = array(
                                     's' =>$s
                                 );
                         // The Query
                     $the_query = new WP_Query( $args );
                     if ( $the_query->have_posts() ) {
                             _e("<h2 style='font-weight:bold;color:#000'>$text_search ".get_query_var('s')."</h2>");?>
                  <div class="row">
                     <?php   while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                              ?>
                     <?php get_template_part( $langFolder, 'item'); ?>
                     <?php
                        }
                        }else{
                        ?>
                     <?php _e("<h2 style='font-weight:bold;color:#000'>$text_search".get_query_var('s')."</h2>");?>
                     <div class="alert alert-info">
                        <p><?php echo $alert; ?></p>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_template_part( $langFolder, 'category-menu-mobile'); ?>
<?php get_footer(); ?>