<?php
	function menuBuilder( $obj ) {
          $menRtn = '<ul>';
          foreach ( $obj as $key => $value ) {
			if(basename($value[ 'pageLink' ],'.html') != 'home') {
	               $menRtn .= '<li>';
	               $menRtn .= '<a href="index.php?pg=' . basename($value[ 'pageLink' ],'.html') . '">' . $value[ 'pageName' ] . '</a>';
	               if ( is_array( $value[ 'childPages' ] ) ) {
	                    $menRtn .= ( menuBuilder( $value[ 'childPages' ] ) );
	               }
	               $menRtn .= '</li>';
			}
          };
          $menRtn .= '</ul>';
          return $menRtn;
     }

     function getPage( $obj, $pg = DEFUALT_PAGE ) {
          $pg = ( !empty( $_GET[ 'pg' ] ) ) ? $_GET[ 'pg' ] : $pg;
          foreach ( $obj as $name => $value ) {
               if ( basename($value[ 'pageLink' ],'.html') == $pg ) {
                    echo '<div class="container animated fadeIn"><h1>' . $value[ 'pageName' ] .'</h1></div><div class="container animated fadeIn">' . $value[ 'pageContent' ] . '</div>';
               } elseif ( is_array( $value[ 'childPages' ] )) {
                    getPage( $value[ 'childPages' ], $pg );
               }
          }
     }

?>