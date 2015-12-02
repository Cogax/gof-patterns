<?php

namespace Singleton\Basic;

class Singleton {
  private static $instance;

  public static function getInstance() {
    if(static::$instance == null) {
      static::$instance = new Singleton();
    }

    return static::$instance;
  }

  protected function __construct() {}
}