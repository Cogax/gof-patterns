<?php

namespace AbstractFactory\Tests\GUI;

use AbstractFactory\GUI\App;

class GUITest extends \PHPUnit_Framework_TestCase {

  public function testWindowsGUI() {
    $app = new App('windows');
    ob_start();
    $app->render();
    $content = ob_get_clean();
    $this->assertEquals('<button class="windows">', $content);
  }

  public function testOSXGUI() {
    $app = new App('osx');
    ob_start();
    $app->render();
    $content = ob_get_clean();
    $this->assertEquals('<button class="osx">', $content);
  }
}
