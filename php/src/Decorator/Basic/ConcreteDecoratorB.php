<?php

namespace Decorator\Basic;

class ConcreteDecoratorB extends Decorator {

  public function __construct(\Decorator\Basic\Component $component) {
    parent::__construct($component);
  }

  public function operation() {
    echo 'concrete decorator B; ';
    $this->component->operation();
  }
}