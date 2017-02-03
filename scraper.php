<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
 $MyWebsite = 'https://www.secp.gov.pk/wp-content/themes/secp/company-results.php?companyName=z&searchCriteria=Start';
 $xml  = simplexml_load_file($MyWebsite);
 foreach($xml as $entry) {
  foreach($entry->CompanyInfo as $item) {
   $items['name'] = (string) $item->Name;
   $items['address'] = (string) $item->OfficeAddress;
   echo 'Name = ' . $items['name'] . '<br/>';
  }
 }
?>
