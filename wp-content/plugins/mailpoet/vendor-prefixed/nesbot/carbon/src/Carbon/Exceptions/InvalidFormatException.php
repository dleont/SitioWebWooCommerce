<?php
 namespace MailPoetVendor\Carbon\Exceptions; if (!defined('ABSPATH')) exit; use Exception; use InvalidArgumentException as BaseInvalidArgumentException; class InvalidFormatException extends \InvalidArgumentException implements \MailPoetVendor\Carbon\Exceptions\InvalidArgumentException { public function __construct($message, $code = 0, \Exception $previous = null) { parent::__construct($message, $code, $previous); } } 