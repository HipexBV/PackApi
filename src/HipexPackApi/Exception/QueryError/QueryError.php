<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. ${YEAR}
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Exception\QueryError;

class QueryError implements QueryErrorInterface
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var array
     */
    private $data;

    /**
     * QueryError constructor.
     *
     * @param string $message
     * @param array $data
     */
    public function __construct(string $message, array $data)
    {
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}