<?php
// real Mockingbird class (can fly)
class Mockingbird extends Bird implements Flyable {
    // Abstract class from Bird defined below.
  public function communicate($comm_type) {
    // ...  
  }
  public function takeOff() {
    // ...
  }
  public function land() {
    // ...
  }
  public function fly($dest) {
    // ...
  }
}