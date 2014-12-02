<?php
/**
 * Created by PhpStorm.
 * User: Zeshan Hassan
 * Date: 11/30/14
 * Time: 11:31 AM
 */

/*-----------------------------------------------------------------------------------*/
//	Theme Pagination Method
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'theme_pagination' ) ){
	  function theme_pagination_home($pages = '',$type=''){
			global $paged;

			if(is_page_template('template-home.php')){
				  $paged = intval(get_query_var( 'page' ));
			}

			if(empty($paged))$paged = 1;

			$prev = $paged - 1;
			$next = $paged + 1;
			$range = 2; // only change it to show more links
			$showitems = ($range * 2)+1;

			if($pages == ''){
				  global $wp_query;
				  $pages = $wp_query->max_num_pages;
				  if(!$pages){
						$pages = 1;
				  }
			}


			if(1 != $pages){

				  echo "<div class='pagination'>";
				  echo ($paged > 2 && $paged > $range+1 && $showitems < $pages)? "<a href='".get_pagenum_link(1)."&type=$type' class='real-btn'>&laquo; ".__('First', 'framework')."</a> ":"";
				  echo ($paged > 1 /*&& $showitems < $pages*/)? "<a href='".get_pagenum_link($prev)."&type=$type' class='real-btn' >&laquo; ". __('Previous', 'framework')."</a> ":"";

				  for ($i=1; $i <= $pages; $i++){
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
							  echo ($paged == $i)? "<a href='".get_pagenum_link($i)."&type=$type' class='real-btn current' >".$i."</a> ":"<a href='".get_pagenum_link($i)."&type=$type' class='real-btn'>".$i."</a> ";
						}
				  }

				  echo ($paged < $pages /*&& $showitems < $pages*/) ? "<a href='".get_pagenum_link($next)."&type=$type' class='real-btn' >". __('Next', 'framework') ." &raquo;</a> " :"";
				  echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."&type=$type' class='real-btn' >". __('Last', 'framework') ." &raquo;</a> ":"";
				  echo "</div>";
			}
	  }
}
if( !function_exists( 'theme_pagination' ) ){
	  function theme_pagination($pages = ''){
			global $paged;

			if(is_page_template('template-home.php')){
				  $paged = intval(get_query_var( 'page' ));
			}

			if(empty($paged))$paged = 1;

			$prev = $paged - 1;
			$next = $paged + 1;
			$range = 2; // only change it to show more links
			$showitems = ($range * 2)+1;

			if($pages == ''){
				  global $wp_query;
				  $pages = $wp_query->max_num_pages;
				  if(!$pages){
						$pages = 1;
				  }
			}


			if(1 != $pages){

				  echo "<div class='pagination'>";
				  echo ($paged > 2 && $paged > $range+1 && $showitems < $pages)? "<a href='".get_pagenum_link(1)."' class='real-btn'>&laquo; ".__('First', 'framework')."</a> ":"";
				  echo ($paged > 1 /*&& $showitems < $pages*/)? "<a href='".get_pagenum_link($prev)."' class='real-btn' >&laquo; ". __('Previous', 'framework')."</a> ":"";

				  for ($i=1; $i <= $pages; $i++){
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
							  echo ($paged == $i)? "<a href='".get_pagenum_link($i)."' class='real-btn current' >".$i."</a> ":"<a href='".get_pagenum_link($i)."' class='real-btn'>".$i."</a> ";
						}
				  }

				  echo ($paged < $pages /*&& $showitems < $pages*/) ? "<a href='".get_pagenum_link($next)."' class='real-btn' >". __('Next', 'framework') ." &raquo;</a> " :"";
				  echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."' class='real-btn' >". __('Last', 'framework') ." &raquo;</a> ":"";
				  echo "</div>";
			}
	  }
}

/*function add_query_vars($aVars) {
	  $aVars[] = "sale"; // represents the name of the product category as shown in the URL
	  return $aVars;
}

// hook add_query_vars function into query_vars
add_filter('query_vars', 'add_query_vars');*/


