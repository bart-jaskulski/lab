<?php

class ClassStringBenchmark
{

  public function benchInArray() {
    if ( in_array( 'GenericInterface', class_implements( 'GenericClass' ) ) ) {
      return true;
    }
  }

  public function benchIsSubclassOf() {
    if ( is_subclass_of( 'GenericClass', 'GenericInterface' ) ) {
      return true;
    }
  }
}

interface GenericInterface {}

class GenericClass implements GenericInterface {}

