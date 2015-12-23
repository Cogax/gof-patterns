<?php

namespace Decorator\Tests\HttpKernel;

use Decorator\HttpKernel\AuthMiddleware;
use Decorator\HttpKernel\HttpKernel;
use Decorator\HttpKernel\LoggerMiddleware;
use PHPUnit_Framework_TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpKernelTest extends PHPUnit_Framework_TestCase {

  public function testHttpKernel() {
    $request = new Request();

    $httpKernel = new HttpKernel();
    $response = $httpKernel->handle($request);

    $this->assertEquals("Hello World!", $response->getContent());
  }

  public function testLoggerMiddleware() {
    $request = new Request();

    $httpKernel = new HttpKernel();
    $loggerMiddleware = new LoggerMiddleware($httpKernel);
    $response = $loggerMiddleware->handle($request);

    $this->assertEquals("Hello World!", $response->getContent());
    $this->assertEquals(1, $loggerMiddleware::$requestCounter);
  }

  public function testAuthMiddleware_NotLoggedInGiven() {
    $request = new Request();

    $httpKernel = new HttpKernel();
    $authMiddleware = new AuthMiddleware($httpKernel);
    $response = $authMiddleware->handle($request);

    $this->assertEquals(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
  }

  public function testAuthMiddleware_LoggedInGiven() {
    $request = new Request();
    $request->headers->set('authorization', 'some token');

    $httpKernel = new HttpKernel();
    $authMiddleware = new AuthMiddleware($httpKernel);
    $response = $authMiddleware->handle($request);

    $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    $this->assertEquals("Hello World!", $response->getContent());
  }

  public function testAuthAndLoggerMiddleware() {
    $request = new Request();
    $request->headers->set('authorization', 'some token');

    $httpKernel = new HttpKernel();
    $loggerMiddleware = new LoggerMiddleware($httpKernel);
    $authMiddleware = new AuthMiddleware($loggerMiddleware);
    $response = $authMiddleware->handle($request);

    $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    $this->assertEquals("Hello World!", $response->getContent());
  }
}