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

    /*public function arc(float $xc, float $yc, float $radius, float $angle1, float $angle2) {
        
    }*/
  
    public function moveTo($x, $y) {
      $union = new StdClass();
      $union->header = new \cairo_path_data_t();
      $union->header->type = CAIRO_PATH_DATA_MOVE_TO;
      $union->header->length = 2;
      $this->data[] = $union;
      $union = new StdClass();
      $union->point = new \cairo_path_data_t();
      $union->point->x = $x;
      $union->point->y = $y;
      $this->data[] = $union;
    }

}
