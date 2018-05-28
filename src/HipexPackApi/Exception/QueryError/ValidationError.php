<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. ${YEAR}
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Exception\QueryError;

class ValidationError extends QueryError
{
    /**
     * @param string $field
     * @return array
     */
    public function fieldGetErrors(string $field): array
    {
        return $this->getFields()[$field] ?? [];
    }

    /**
     * @param string $field
     * @return bool
     */
    public function fieldHasErrors(string $field): bool
    {
        return isset($this->getFields()[$field]);
    }

    /**
     * @return array
     */
    private function getFields(): array
    {
        return $this->getData()['fields'] ?? [];
    }
}