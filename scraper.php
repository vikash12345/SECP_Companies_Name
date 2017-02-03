<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$MyWebsite = 'https://www.secp.gov.pk/company-name-search/?searchCriteria=Start&companyName=z';
$html  = file_get_html($MyWebsite);
foreach($html->find("//*[@id="address-list"]/div[1]/h4")as $element){
$Com = $element->find("h4", 0)->plaintext;

print $Com;
echo '<br/>';
}
?>
