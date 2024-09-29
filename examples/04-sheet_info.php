<?php /** @noinspection ForgottenDebugOutputInspection */

require_once __DIR__ . '/SimpleXLS.php';

use Shuchkin\SimpleXLS;

echo '<h1>Parse books.xls</h1><pre>';

if ( $xls = SimpleXLS::parseFile('books.xls') ) {

	print_r( $xls->boundsheets );

} else {
	
	echo SimpleXLS::parseError();
	
}

echo '<pre>';
