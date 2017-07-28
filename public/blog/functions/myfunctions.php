<?php

  include("db/config.php");

  function build_query($user_search) {

      $search_query = "SELECT * FROM blog_post";
      $clean_search = str_replace(',', ' ', $user_search);
      $search_words = explode(' ', $clean_search);
      $final_search_words = array();

      if(count($search_words) > 0){
        foreach ($search_words as $word) {
          if(!empty($word)){
            $final_search_words[] = $word;
          }
        }
      }
        $where_list = array();
         if (count($final_search_words) > 0) {
           foreach($final_search_words as $word) {
             $where_list[] = "post_title LIKE '%$word%' OR post_content LIKE '%$word%' OR category LIKE '%$word%' ORDER BY post_id DESC";
           }
         }

      $where_clause = implode(' OR ', $where_list);
      if (!empty($where_clause)) {
         $search_query .= " WHERE $where_clause";
       }

      return $search_query;

    }

    function generate_page_links($cur_page, $num_pages) {
      $page_links = '<ul class="pagination pagination-sm pull-right">';

      // If this page is not the first page, generate the "Previous" link

      if ( $cur_page > 1 ) {

        $page_links .= '<li><a href="' . $_SERVER['PHP_SELF'] .
          '?page=' . ( $cur_page - 1 ) . '">Prev</a></li> ';

      }
      else {
        $page_links .= '<li><a href="#">Prev</a></li> ';
      }

      // Loop through the pages generating the page number links
      for ($i = 1; $i <= $num_pages; $i++) {

        if ( $cur_page == $i ) {

          $page_links .= ' <li class="active"><a> ' . $i . '</a></li>';
        }
        else {
          $page_links .= ' <li><a href="' . $_SERVER['PHP_SELF'] .
            '?page=' . $i . '"> ' . $i . '</a></li>';
        }
      }

      // If this page is not the last page, generate the "Next" link

      if ( $cur_page < $num_pages ) {

        $page_links .= ' <li><a href="' . $_SERVER['PHP_SELF'] .
          '?page=' . ($cur_page + 1) . '">Next</a></li>';
      }
      else {
        $page_links .= ' <li><a href="#">Next</a></li>';
      }
      $page_links .= '</ul>';

      return $page_links;
    }

    function generate_page_links_search($search, $cur_page, $num_pages) {
      $page_links = '';

      // If this page is not the first page, generate the "Previous" link

      if ( $cur_page > 1 ) {

        $page_links .= '<a href="' . $_SERVER['PHP_SELF'] .
        '?search=' . $search .
        '&page=' . ( $cur_page - 1 ) . '"><-</a> ';

      }
      else {
        $page_links .= '<- ';
      }

      // Loop through the pages generating the page number links
      for ($i = 1; $i <= $num_pages; $i++) {

        if ( $cur_page == $i ) {

          $page_links .= ' ' . $i;
        }
        else {
          $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] .
          '?search=' . $search .
            '&page=' . $i . '"> ' . $i . '</a>';
        }
      }

      // If this page is not the last page, generate the "Next" link

      if ( $cur_page < $num_pages ) {

        $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] .
        '?search=' . $search .
          '&page=' . ($cur_page + 1) . '">-></a>';
      }
      else {
        $page_links .= ' ->';
      }

      return $page_links;
    }


 ?>
