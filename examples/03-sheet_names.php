<?php /** @noinspection ForgottenDebugOutputInspection */

require_once __DIR__ . '/SimpleXLS.php';

use Shuchkin\SimpleXLS;

echo '<h1>Parse books.xls</h1><pre>';

if ( $xls = SimpleXLS::parse('books.xls') ) {

	print_r( $xls->sheetNames() );
	print_r( $xls->sheetName( $xls->activeSheet ) );

} else {
	
	echo SimpleXLS::parseError();
	
}

echo '<pre>';
