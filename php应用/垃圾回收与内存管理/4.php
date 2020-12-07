<?php
$a = array( 'meaning' => 'life', 'number' => 42 );
xdebug_debug_zval( 'a' );

/**
        // a:
        // (refcount=1, is_ref=0)
        // array (size=2)
        //  'meaning' => (refcount=1, is_ref=0)string 'life' (length=4)
        //  'number' => (refcount=1, is_ref=0)int 42
 */