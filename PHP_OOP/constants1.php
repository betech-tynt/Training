<?php
 class Goodbye
 {
    const MESSAGE = 'Goodbye see you again!';
    public function bye()
    {
      return self::MESSAGE;
    }
 }

 $google = new Goodbye();
 
 echo Goodbye::MESSAGE;

?>