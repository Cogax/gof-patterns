<?php

namespace AbstractFactory\Basic;

class ConcreteFactory2 extends AbstractFactory  {

  function createProductA() {
    return new AbstractProductA2();
  }

  function createProductB() {
    return new AbstractProductB2();
  }
}