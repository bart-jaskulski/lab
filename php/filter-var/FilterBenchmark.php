<?php

function wc_string_to_bool( $string ) {
  return is_bool( $string ) ? $string : ( 'yes' === strtolower( $string ) || 1 === $string || 'true' === strtolower( $string ) || '1' === $string );
}

class FilterBench
{
    public function benchPhpFunction()
    {
      filter_var('1', \FILTER_VALIDATE_BOOL);
    }
    public function benchWcFunction()
    {
      wc_string_to_bool('1');
    }

    public function benchPhpFunctionYes()
    {
      filter_var('yes', \FILTER_VALIDATE_BOOL);
    }
    public function benchWcFunctionYes()
    {
      wc_string_to_bool('yes');
    }

    public function benchPhpFunctionNo()
    {
      filter_var('no', \FILTER_VALIDATE_BOOL);
    }
    public function benchWcFunctionNo()
    {
      wc_string_to_bool('no');
    }
}
