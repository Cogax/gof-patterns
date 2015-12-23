<?php

namespace Decorator\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Class Middleware
 *
 * This calss represents a "Decorator".
 *
 * @package Decorator\HttpKernel
 */
abstract class Middleware implements HttpKernelInterface {

  /**
   * @var \Symfony\Component\HttpKernel\HttpKernelInterface
   */
  protected $httpKernel;

  public function __construct(HttpKernelInterface $httpKernel) {
    $this->httpKernel = $httpKernel;
  }

  /**
   * @inheritdoc
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    $this->httpKernel->handle($request, $type, $catch);
  }
}