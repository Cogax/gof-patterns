<?php

namespace AbstractFactory\GUI;

class WindowsFactory implements GUIFactoryInterface {

  /**
   * @inheritdoc
   */
  public function createButton() {
    $button = new WindowsButton();
    $button->paint();
  }
}