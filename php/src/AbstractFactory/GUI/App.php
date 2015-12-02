<?php

namespace AbstractFactory\GUI;

class App {
  /**
   * @var \AbstractFactory\GUI\GUIFactoryInterface
   */
  private $gui;

  /**
   * App constructor.
   * @param string $os
   */
  public function __construct($os) {
    if($os == 'osx') {
      $this->gui = new OSXFactory();
    } else {
      $this->gui = new WindowsFactory();
    }
  }

  /**
   * Render the Application.
   */
  public function render() {
    $this->gui->createButton();
  }
}