<?php

// This function generates formatted Markdown text without enclosing <p> tags

function ktRaw($content) {
  $text = kirbytext($content);
  return preg_replace('/(.*)<\/p>/', '$1', preg_replace('/<p>(.*)/', '$1', $text));
}

field::$methods['ktRaw'] = function($field) {
  return ktRaw($field->value);
};