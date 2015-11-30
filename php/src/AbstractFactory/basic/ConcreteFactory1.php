<?php

namespace AbstractFactory\Basic;

class ConcreteFactory1 extends AbstractFactory {

  function createProductA() {
    return new ProductA1();
  }

  function createProductB() {
    return new ProductB1();
  }
}