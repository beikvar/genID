<?php function genID($n) {
  $chars="0123456789abcdefghijklmnopqrstuvwxyz";
  $id = ''; $thing=0;
  while($thing==0){
    for ($i=0; $i<$n; $i++) {
      $r = rand(0, strlen($chars)-1);
      $id .= $chars[$r];
    }
    if(strpos(file_get_contents("db/posts/index.txt"),"$id\n") === false){
      $thing=1;
    }
  }
  return $id;
}
