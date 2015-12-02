<?php

namespace Singleton\Tests\Basic;

use Singleton\Basic\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase {

  public function testSingleton() {
    $singleton = Singleton::getInstance();
    $singleton2 = Singleton::getInstance();

    $this->assertInstanceOf('Singleton\Basic\Singleton', $singleton);
    $this->assertSame($singleton, $singleton2);
  }
}
