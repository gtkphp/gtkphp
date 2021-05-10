<?php

namespace Cairo;

class Path extends \cairo_path_t implements \Iterator {
  // public:
    // status:int
    // data:array
    // num_data:int
    protected $position = 0;
  
    public function current() : mixed {
        return $this->data[$this->position];
    }

    public function key(): scalar {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }
  
    public function valid(): bool {
        return isset($this->data[$this->position]);
    }
}
