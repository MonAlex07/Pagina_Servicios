<?php
// always load alternative config file for examples
require_once('/var/www/php/tcpdf/tcpdf_config.php');

// Include the main TCPDF library (search the library on the following directories).
$tcpdf_include_dirs = array('/usr/share/tcpdf/tcpdf.php', '/usr/share/php-tcpdf/tcpdf.php', '/var/tcpdf/tcpdf.php', '/var/www/html/tcpdf/tcpdf.php', '/usr/local/apache2/htdocs/tcpdf/tcpdf.php');
foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
	if (@file_exists($tcpdf_include_path)) {
		require_once($tcpdf_include_path);
		break;
	}
}
require('/var/tcpdf/lang/spa.php');
//============================================================+
// END OF FILE
//============================================================+
