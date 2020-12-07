<?php
$a = array( 'meaning' => 'life', 'number' => 42 );
xdebug_debug_zval( 'a' );
$a['life'] = $a['meaning'];
xdebug_debug_zval( 'a' );

// a:
// (refcount=1, is_ref=0)
// array (size=3)
//  'meaning' => (refcount=2, is_ref=0)string 'life' (length=4)
//  'number' => (refcount=0, is_ref=0)int 42
//  'life' => (refcount=2, is_ref=0)string 'life' (length=4)
