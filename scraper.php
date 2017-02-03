<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$MyWebsite = 'http://www.pmdc.org.pk//DesktopModules/pmdcDetails/PractDetail.aspx?RegistrationNo=';

 for ($serialnumb = 9000; $serialnumb < 9020; $serialnumb++) {
  $NewURL = $MyWebsite . $serialnumb . '-N';
  $html = file_get_html($NewURL);
  
  echo 'User ID #: ' . $serialnumb . '-N';
  echo '<br/>';
  
  foreach($html->find("//*[@class='cssSTbl']/tbody/tr") as $element) {
   if ($element) {
    $TD_Title = $element->find("td", 0);
    $TD_Value = $element->find("td", 1);
    if ($TD_Title && $TD_Value) {
     print $TD_Title->plaintext . ' --> ' . $TD_Value->plaintext;
     echo '<br/>';
    }
   }
  }
  echo '-------------------------------------------<br/>';
 }

?>
