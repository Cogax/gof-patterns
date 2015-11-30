<?php

namespace AbstractFactory\Tests\Basic;

use AbstractFactory\Basic\ConcreteFactory1;
use AbstractFactory\Basic\ConcreteFactory2;
use PHPUnit_Framework_TestCase;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase {

  public function testInstanceOfProductA1() {
    $factory1 = new ConcreteFactory1();
    $productA1 = $factory1->createProductA();
    $this->assertInstanceOf('AbstractFactory\Basic\AbstractProductA',
      $productA1);
  }

  public function testInstanceOfProductA2() {
    $factory2 = new ConcreteFactory2();
    $productA2 = $factory2->createProductA();
    $this->assertInstanceOf('AbstractFactory\Basic\AbstractProductA',
      $productA2);
  }

  public function testInstanceOfProductB1() {
    $factory1 = new ConcreteFactory1();
    $productB1 = $factory1->createProductB();
    $this->assertInstanceOf('AbstractFactory\Basic\AbstractProductB',
      $productB1);
  }

  public function testInstanceOfProductB2() {
    $factory2 = new ConcreteFactory2();
    $productB2 = $factory2->createProductB();
    $this->assertInstanceOf('AbstractFactory\Basic\AbstractProductB',
      $productB2);
  }

}
