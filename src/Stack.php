<?php

namespace Stack;

class Stack
{
    /**
     * @var array $stack
     */
    private $stack = [];

    /**
     * Push an item to the stack
     *
     * @param int|string|array|mixed $item
     */
    public function push($item): void
    {
        $this->stack[] = $item;
    }

    /**
     * Pop last value from stack.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->stack);
    }

    /**
     * Returns last value inside stack.
     *
     * @return mixed
     */
    public function peek()
    {
        $stackValues = array_values($this->stack);

        return end($stackValues);
    }

    /**
     * Validates whether stack is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    /**
     * Merges the given array into stack.
     *
     * @param array $array
     */
    public function merge(array $array): void
    {
        $this->stack = array_merge($this->stack, $array);
    }

    /**
     * Get all of the values inside the stack.
     *
     * @return array
     */
    public function get(): array
    {
        return $this->stack;
    }
}
