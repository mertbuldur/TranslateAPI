<?php
namespace TranslateAPI;
/**
 * Class translate
 * @package TranslateAPI
 */
class translate implements translateInterface
{
    /**
     * @var string
     */
    public $url = "https://translate.yandex.net/api/v1.5/tr.json/translate";

    /**
     * translate constructor.
     * @param $apiKey
     * @param $targetLanguage
     */
    public function __construct($apiKey, $targetLanguage)
    {
        $this->url = $this->url."?lang=".$targetLanguage."&key=".$apiKey;
    }

    /**
     * @param $text
     * @return string
     */
    public function translate($text)
    {
        $text = "text=".$text;
        $response =  $this->HTTPPoster($this->url,$text);
        $jsonData = json_decode($response,true);
        return (isset($jsonData['text'][0])) ? $jsonData['text'][0] : "Bulunamadı";
    }


    /**
     * @param $address
     * @param $data
     * @return bool|string
     */
    public function HTTPPoster($address, $data)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$address);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_TIMEOUT,30);
        curl_setopt($ch,CURLOPT_POST,TRUE);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $result = curl_exec($ch);
        return $result;
    }
}