# Stack

<p>A simple implementation of stack in php.</p>

## Install

`composer require ahp/stack`

# usage

```
$stack = new Stack();

// Push an item into the stack
$stack->push($value);

// Pop last item from the stack
$stack->pop();

// Shows the last value at the end of the stack
$stack->peek();

// Validates whether stack is empty.
$stack->isEmpty();

//Merges the given array into stack.
$stack->merge($array)

// Get all of the values inside the stack.
$stack->get();
```
