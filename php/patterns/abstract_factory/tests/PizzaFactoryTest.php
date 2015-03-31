<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 31/03/15
 * Time: 20:58
 */

namespace Patterns\AbstractFactory;

use PHPUnit_Framework_TestCase;

class PizzaFactoryTest extends PHPUnit_Framework_TestCase {

  public function testPizzaFactoryNull() {
    $pizzaFactory = new PizzaFactory();
    $this->assertNotNull($pizzaFactory);
  }

}
