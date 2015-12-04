<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
  relation:
    label: Sur les lignes
    type: relation
    search: true
    options: http://localhost/atlas-sensible/api?format=select&page=la-bande/lignes/