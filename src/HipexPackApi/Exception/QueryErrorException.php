<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Exception;

use HipexPackApi\Exception\QueryError\QueryErrorInterface;

class QueryErrorException extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var QueryErrorInterface[]
     */
    private $errors;

    /**
     * QueryErrorException constructor.
     * @param QueryErrorInterface[] $errors
     */
    public function __construct(array $errors = [])
    {
        parent::__construct();
        $this->setErrors($errors);
    }

    /**
     * @return QueryErrorInterface[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param QueryErrorInterface[] $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = [];
        foreach ($errors as $error) {
            $this->addError($error);
        }
    }

    /**
     * @param QueryErrorInterface $error
     */
    public function addError(QueryErrorInterface $error)
    {
        $this->errors[] = $error;
    }
}