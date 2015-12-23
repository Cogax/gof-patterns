<?php

namespace Decorator\Tests\Basic;

use Decorator\Basic\ConcreteComponent;
use Decorator\Basic\ConcreteDecoratorA;
use Decorator\Basic\ConcreteDecoratorB;
use PHPUnit_Framework_TestCase;

class BasicTest extends PHPUnit_Framework_TestCase {

  public function testDecorateComponent() {
    ob_start();

    $component = new ConcreteComponent();
    $decoratorB = new ConcreteDecoratorB($component);
    $decoratorA = new ConcreteDecoratorA($decoratorB);
    $decoratorA->operation();

    $content = ob_get_clean();

    $this->assertEquals("concrete decorator A; concrete decorator B; conrete component; ", $content);
  }
}