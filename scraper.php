<?php

require ''scraperwiki.php;
require 'scraperwiki/simple_html_dom.php';
$site = 'https://www.secp.gov.pk/wp-content/themes/secp/company-results.php?companyName=z&searchCriteria=Start';
$html = file_get_html($site);
echo $html;

?>
