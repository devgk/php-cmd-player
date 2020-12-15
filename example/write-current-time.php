<?php

date_default_timezone_set("Asia/Calcutta");

$file = dirname(__FILE__).'/current-time.txt';

$key = $argv[1];

$content = "Updated using PHP PID: ".getmypid()." | Key: ".$key.PHP_EOL;

while(true){
  $date = new DateTime();
  $date = $date->format("y:m:d h:i:s");

  if($handle = fopen($file, 'w')){
    fwrite($handle, $date);
    fwrite($handle, PHP_EOL);
    fwrite($handle, $content);
  }

  fclose($handle);

  sleep(1);
}