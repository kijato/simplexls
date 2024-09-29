<?php /** @noinspection ForgottenDebugOutputInspection */
require_once __DIR__ . '/../src/SimpleXLS.php';

use Shuchkin\SimpleXLS;

echo '<h1>Parse books.xls</h1><pre>';
if ($xls = SimpleXLS::parse('books.xls')) {
    for ($sheet = 0; $sheet < count($xls->sheetNames()); $sheet++) {
		print '<h3>' . $xls->boundsheets[$sheet]['name'] . '</h3>';
		print_r($xls->rows($sheet));
	}
} else {
    echo SimpleXLS::parseError();
}
echo '<pre>';
