<?php

namespace AbstractFactory\Basic;

class ConcreteFactory1 extends AbstractFactory {

  function createProductA() {
    return new AbstractProductA1();
  }

  function createProductB() {
    return new AbstractProductB1();
  }
}