<?php

class cmd_player{
  static function exec($cmd){
    if (substr(php_uname(), 0, 7) == "Windows"){
      pclose(popen("start /B ". $cmd, "r"));
    }
    else {
      exec($cmd . " > /dev/null &");
    }
  }

  static function kill_exec($pid){
    if (substr(php_uname(), 0, 7) == "Windows"){
      exec("taskkill /F /PID $pid");
    }
    else {
      exec("kill -9 $pid");
    }
  }
}