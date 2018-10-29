<?php
	function menuBuilder( $obj ) {
          $menRtn = '<ul>';
          foreach ( $obj as $key => $value ) {
               $menRtn .= '<li>';
               $menRtn .= '<a href="index.php?pg=' . basename($value[ 'pageLink' ],'.html') . '">' . $value[ 'pageName' ] . '</a>';
               if ( is_array( $value[ 'childPages' ] ) ) {
                    $menRtn .= ( menuBuilder( $value[ 'childPages' ] ) );
               }
               $menRtn .= '</li>';
          };
          $menRtn .= '</ul>';
          return $menRtn;
     }
?>