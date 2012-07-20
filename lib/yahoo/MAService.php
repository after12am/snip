<?
require_once('YahooAPI.php');

class MAService extends YahooAPI {
    
    const MAService_API = 'http://jlp.yahooapis.jp/MAService/V1/parse';
    
    public function __construct($appid) {
        
        parent::__construct($appid);
    }
    
    public function parse($sentence, $results = 'ma') {
        
        $base = self::MAService_API;
        $appid = $this->appid;
        $sentence = urlencode($sentence);
        $api = "{$base}?appid={$appid}&results={$results}&sentence={$sentence}";
        return simplexml_load_file($api);
    }
}