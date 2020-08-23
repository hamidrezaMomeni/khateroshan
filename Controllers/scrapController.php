<?php
class scrapController
{
    private $ch = NULL;
    private $url = NULL;
    private $htmlResult = NULL;

    public function __construct($url) {
        $this->ch = curl_init();
        $this->url = $url;
        curl_setopt($this->ch, CURLOPT_URL, $this->url);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
        $this->htmlResult = curl_exec($this->ch);
    }

    private function getElementByXPath($xpath=NULL){
        $dom = new DOMDocument();
        @$dom->loadHTML($this->htmlResult);
        $fieldByXPath = $xpath;
        $domXPath = new DOMXPath($dom);
        $fields = $domXPath->query($fieldByXPath);
        return $fields;
    }

    public function getElementValue($xpath) {
        $elementFields = $this->getElementByXPath($xpath);
        foreach ($elementFields as $elementField) {
            return utf8_decode($elementField->textContent);
        }
    }

    public function getElementImg($xpath) {
        $elementFields = $this->getElementByXPath($xpath);
        foreach ($elementFields as $elementField) {
            return $elementField->attributes[1]->textContent;
        }
    }
}

$scrapObj = new scrapController("https://www.digikala.com/product/dkp-2066213/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF-%D9%85%D8%AF%D9%84-galaxy-a10s-sm-a107fds-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-32-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA");
// echo $scrapObj->getElementValue("//*[@class='c-product__title']");
// echo "<br>";
// echo $scrapObj->getElementValue("//*[@class='js-gallery-img']");
// $scrapObj->getElementImg("//*[@class='js-gallery-img']");
