Basic Yandex Translate API Helper

Usage:

**Step 1:**

composer require buldurmert/translate-helper

**Step 2:**

use TranslateAPI\translate;

$translate = new translate($apiKey,"en-tr");

echo $translate->translate("Hello World");

// Result: Merhaba Dünya