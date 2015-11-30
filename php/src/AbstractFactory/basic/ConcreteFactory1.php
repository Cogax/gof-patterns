<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 01/04/15
 * Time: 19:38
 */

namespace patterns\abstract_factory\src;

class ConcreteFactory1 extends AbstractFactory {

  function createProductA() {
    return new AbstractProductA1();
  }

  function createProductB() {
    return new AbstractProductB1();
  }
}