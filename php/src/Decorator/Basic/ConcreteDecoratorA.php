<?php

namespace Decorator\Basic;

class ConcreteDecoratorA extends Decorator {

  public function __construct(\Decorator\Basic\Component $component) {
    parent::__construct($component);
  }

  public function operation() {
    echo 'concrete decorator A; ';
    $this->component->operation();
  }
}