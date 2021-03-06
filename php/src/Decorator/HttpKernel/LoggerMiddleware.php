<?php

namespace Decorator\HttpKernel;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class LoggerMiddleware
 *
 * This class represents a "ConcreteDecorator".
 *
 * @package Decorator\HttpKernel
 */
class LoggerMiddleware extends Middleware {

  public static $requestCounter = 0;

  /**
   * LoggerMiddleware constructor.
   * @param \Symfony\Component\HttpKernel\HttpKernelInterface $httpKernel
   */
  public function __construct(\Symfony\Component\HttpKernel\HttpKernelInterface $httpKernel) {
    parent::__construct($httpKernel);
  }

  /**
   * @inheritdoc
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    self::$requestCounter++;
    return $this->httpKernel->handle($request, $type, $catch);
  }
}