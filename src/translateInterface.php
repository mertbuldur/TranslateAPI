<?php
namespace TranslateAPI;
interface  translateInterface
{
    public function __construct($apiKey,$targetLanguage);

    public function translate($text);

    public function HTTPPoster($address,$data);

}