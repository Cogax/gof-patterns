<?php

namespace Decorator\Tests\Basic;

use Decorator\Basic\ConcreteComponent;
use Decorator\Basic\ConcreteDecoratorA;
use Decorator\Basic\ConcreteDecoratorB;
use PHPUnit_Framework_TestCase;

class BasicTest extends PHPUnit_Framework_TestCase {

  public function testDecorator() {
    ob_start();

    $component = new ConcreteComponent();
    $decoratorA = new ConcreteDecoratorA($component);
    $decoratorA->operation();
    $decoratorB = new ConcreteDecoratorB($component);
    $decoratorB->operation();

    $content = ob_get_clean();

    $this->assertEquals("concrete decorator A; conrete component; concrete decorator B; conrete component; ", $content);
  }
}