<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-api-problem for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-api-problem/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-api-problem/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\ApiProblem\Exception;

/**
 * Interface for exceptions that can provide additional API Problem details
 */
interface ProblemExceptionInterface
{
    public function getAdditionalDetails();
    public function getProblemType();
    public function getTitle();
}
