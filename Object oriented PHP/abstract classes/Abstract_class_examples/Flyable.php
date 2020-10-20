<?php
// Flyable interface implemented by Mockingbird class.
interface Flyable
{
    public function takeOff();
    public function land();
    public function fly($dest);
}