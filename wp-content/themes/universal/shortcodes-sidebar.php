<?php 	
	$pages = get_pages(array(
		'child_of' => get_top_parent_page_id()           
	));
    
    foreach ( $pages as $page ) {
    	if(is_page($page->ID)){
        	echo '<li class="active"><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
		}else{
			echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';
		}
    }                                                
?>