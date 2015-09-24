<?php
namespace TYPO3\Flow\Mvc\Controller\Exception;

/*                                                                        *
 * This script belongs to the Flow framework.                             *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the MIT license.                                          *
 *                                                                        */

/**
 * An Invalid Controller Exception.
 *
 */
class InvalidControllerException extends \TYPO3\Flow\Mvc\Controller\Exception
{
    /**
     * @var integer
     */
    protected $statusCode = 404;
}
