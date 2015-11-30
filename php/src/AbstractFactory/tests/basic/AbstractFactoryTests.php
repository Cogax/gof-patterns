<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 31/03/15
 * Time: 20:58
 */

namespace patterns\Abstract_factory\tests;

use patterns\abstract_factory\src\ConcreteFactory1;
use patterns\abstract_factory\src\ConcreteFactory2;
use PHPUnit_Framework_TestCase;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase {

  public function testInstanceOfProductA1() {
    $factory1 = new ConcreteFactory1();
    $productA1 = $factory1->createProductA();
    $this->assertInstanceOf('patterns\abstract_factory\src\AbstractProductA',
      $productA1);
  }

  public function testInstanceOfProductA2() {
    $factory2 = new ConcreteFactory2();
    $productA2 = $factory2->createProductA();
    $this->assertInstanceOf('patterns\abstract_factory\src\AbstractProductA',
      $productA2);
  }

  public function testInstanceOfProductB1() {
    $factory1 = new ConcreteFactory1();
    $productB1 = $factory1->createProductB();
    $this->assertInstanceOf('patterns\abstract_factory\src\AbstractProductB',
      $productB1);
  }

  public function testInstanceOfProductB2() {
    $factory2 = new ConcreteFactory2();
    $productB2 = $factory2->createProductB();
    $this->assertInstanceOf('patterns\abstract_factory\src\AbstractProductB',
      $productB2);
  }

}
