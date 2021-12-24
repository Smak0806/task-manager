<?php

class Task {
    // Properties
    public $name;
    public $category;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_category($category) {
      $this->category = $category;
    }
    function get_category() {
      return $this->category;
    }
}