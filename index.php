<?php
require "./assertions/fdAssertions.php";

use fdCore\fdAssert ;

class loginTest extends  fdAssert  {
  public function testGoodLogin ()
  {
    $this->url('');
    $this->assertLoginFailed();
   }
  
}

