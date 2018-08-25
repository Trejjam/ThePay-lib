<?php
declare(strict_types=1);

namespace Tp;

/**
 * Exception thrown when payment signature validation failed.
 */
class InvalidSignatureException extends Exception
{
	public function __construct()
	{
		parent::__construct('Invalid signature');
	}
}
