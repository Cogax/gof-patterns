<?php

namespace AbstractFactory\Basic;

class ConcreteFactory2 extends AbstractFactory  {

  function createProductA() {
    return new ProductA2();
  }

  function createProductB() {
    return new ProductB2();
  }
}