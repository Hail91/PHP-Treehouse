<?php
// abstract bird class
abstract class Bird {
  public $color;
  public $wingspan;
  public $habitat;
  // Methods
  public function eat() {
    // ....
  }
  public function sleep() {
    // ....
  }
  // Abstract method <-- Child classes must have this method implemented.
  abstract public function communicate($comm_type);
}