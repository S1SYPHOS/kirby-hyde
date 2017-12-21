<?php

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();
  $posts = $page->children()
                   ->visible()
                   ->flip()
                   ->paginate(($perpage >= 1)? $perpage : 5);

  return [
    'posts'   => $posts,
    'pagination' => $posts->pagination()
  ];
};