<?php
  
  class Cities{

    public  $cities  = "";
    private $urls    = array("cities" => "https://api.musement.com/api/v3/cities", "weather" => "http://api.weatherapi.com/v1/forecast.json?key=665994fcfaee478a88f182013212206");
    private $stored  = "json/cities.json";
    
    public function __construct(){
      $this->cities=$this->api($this->urls["cities"], $this->stored);
    }
    
    public function main(){
      foreach ($this->cities as $key => $value) {
        $weather=$this->weather(array("lat"=>$value["latitude"], "long" => $value["longitude"] ), 2);
        fwrite(STDOUT, "Processed city ".$value["name"]." | ".$weather[0]." - ".$weather[1].PHP_EOL);
      }
    }
    
    private function weather($city, $days = 2){
      $weather=$this->api($this->urls["weather"]."&q=".$city['lat'].",".$city['long']."&days=".$days);
      $result=array();
      foreach($weather["forecast"]["forecastday"] as $key => $value){
        $result[$key]=$value["day"]["condition"]["text"];
      }
      return $result;
    }
    
    public function cities(){
      foreach ($this->cities as $key => $value){
        fwrite(STDOUT, $value["name"].PHP_EOL);
      }
    }

    private function api($url, $file = ""){
      header('Content-Type: application/json; charset=utf-8');
      if(!file_exists($file) && !empty($file)){
        file_put_contents($file, file_get_contents($url));
      }
      if(empty($file)){
        $file=$url;
      }
      return json_decode(file_get_contents($file), true);
    }
      
    public function read($city, $days){
      $city=$this->city($city);
      $weather=$this->weather(array("lat"=>$city["latitude"], "long" => $city["longitude"] ), $this->day($days));
      $last=end($weather);
      echo json_encode(array("city" => $city["name"], "weather" => $last, "day" => $days), true);
    }
    
    private function day($days){
      switch($days){
        case "today":
          $days=1;
        break;
        case "tomorrow":
          $days=2;
        break;
      }
      return $days;
    }
    
    private function city($city){
      foreach ($this->cities as $key => $value) {
        if($value["name"]==$city){
          return $this->cities[$key];
        }
      }
    }
  
  }
  
  $call=new Cities();
  $call->main();
  //$call->cities();
  //$call->read("Amsterdam", "today");

?>