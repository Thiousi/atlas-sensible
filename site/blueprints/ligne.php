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
    label: Passe par
    type: relation
    search: true
    options: query
    query: 
      page: la-bande/points/evenements
      fetch: children
			value: '{{uri}}'
      text: '{{parent}} {{title}}'
      template: point