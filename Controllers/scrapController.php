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

$scrapObj = new scrapController($_POST['productLink']);
include_once "../Views/products.php";
