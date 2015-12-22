<?php

namespace Decorator\Basic;

abstract class Decorator implements Component {

  /**
   * @var \Decorator\Basic\Component
   */
  protected $component;

  public function __construct(Component $component) {
    $this->component = $component;
  }

  public function operation() {
    $this->component->operation();
  }
}