<?php
// ** LINKS **
// http://treehouse-code-samples.s3.amazonaws.com/PHP/interfaces/interface_abstract_class_comparison.pdf

// ** NOTES **
/* Interfaces allow us to talk about requirements without the need for implementation 
details. In other words, what do we need to be able to do with this object? This will 
help with both building a class and implementing an object. */

/* Object interfaces allow you to create code which specifies which methods a class 
must implement, without having to define how these methods are handled. */

/* Interfaces are defined in the same way as a class, but with the interface keyword 
replacing the class keyword and without any of the methods having their contents 
defined. */

/* All methods declared in an interface must be public; this is the nature of 
an interface. */

/* To implement an interface, the implements operator is used. All methods in the 
interface must be implemented within a class; failure to do so will result in a fatal 
error. Classes may implement more than one interface if desired by separating each 
interface with a comma. */

/* Constants: It's possible for interfaces to have constants. Interface constants 
works exactly like class constants except they cannot be overridden by a 
class/interface that inherits them. */

interface RepositoryInterface {
    public function all($entity);
    public function find($entity, $identifier, $field = 'id');
}