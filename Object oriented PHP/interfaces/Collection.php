<?php
// Example of using Iterator interface.
class Collection implements Iterator, Countable {
    protected $repo;
    public $collection;

    public function __construct(RepositoryInterface $repo, $id = null, $field = 'id') {
        $this->repo = $repo;
        if(!empty($id)) {
            $this->collection = $this->repo->find('posts', $id, $field);
        }
        else $this->collection = $this->repo->all('posts');
    }
    // Built in method on Iterator interface that returns the current element in collection.
    public function current() {
        return current($this->collection);
    }
    // Returns key of current element being pointed to by internal pointer.
    public function key() {
        return key($this->collection);
    }
    // Move internal pointer to next array element.
    public function next() {
        return next($this->collection);
    }
    // 'Resets' the internal pointer to the first array element.
    public function rewind() {
        return reset($this->collection);
    }
    /* Returns true/false bool depending on whether value internal pointer
    is pointing at is valid or not. */
    public function valid() {
        return key($this->collection) !== null;
    }
    // Counts elements in array being passed in. (Returns count --> INT)
    public function count() {
        return count($this->collection);
    }
}