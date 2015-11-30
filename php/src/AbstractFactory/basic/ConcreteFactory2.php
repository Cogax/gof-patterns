<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 01/04/15
 * Time: 20:04
 */

namespace patterns\abstract_factory\src;

class ConcreteFactory2 extends AbstractFactory  {

  function createProductA() {
    return new AbstractProductA2();
  }

  function createProductB() {
    return new AbstractProductB2();
  }
}