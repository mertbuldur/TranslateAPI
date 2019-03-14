<?php
include("src/translateInterface.php");
include("src/translate.php");
use TranslateAPI\translate;
$translate = new translate("trnsl.1.1.20181116T200129Z.775558096056e445.a0cb98993d244e1a93e7aa435b7a0f60a6b5ab4d","tr-en");
echo $translate->translate("merhaba dünya");