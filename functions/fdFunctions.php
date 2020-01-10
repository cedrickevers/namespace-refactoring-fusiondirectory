<?php

namespace fdCore;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverKeys;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\Exception\NoSuchElementException;



class fdFunctions extends TestCase{
  static protected $fd_url              = 'http://demo-dev.fusiondirectory.org/fusiondirectory/';
  protected $driver;


protected function setUp () : void
{

  // start chrome with 5 seconds timeout
  $host = 'http://localhost:4444/wd/hub'; // this is the default
  $capabilities = DesiredCapabilities::firefox();
  $this->driver = RemoteWebDriver::create($host, $capabilities, 5000);
}


  protected function url ($endpoint)

  {

    // Remove last / in self::$fd_url if needed
    $fd_url = preg_replace('/\/$/', '', self::$fd_url);

    // Remove first / in $endpoint if needed
    $endpoint = preg_replace('/^\//', '', $endpoint);

    // Add the two parts together with an /
    $this->driver->get($fd_url.'/'.$endpoint);
  }

}