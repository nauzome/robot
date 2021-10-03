<?php
/*
https://webnetamemo.com/coding/php/201608313448
*/
  $rand = array(
      "笑。",
      "そうかもしれない。",
      "いいかもしれないね。",
      "確かに。",
      "わからない。",
      "ゆるして。",
      "へー。",
      "詳しくないたいです。",
      "ラーメン食べたい。",
      "わからないけど応援します！。",
      "(´；ω；｀)"
  );
  $rand = $rand[mt_rand(0, count($rand)-1)];
  $data = array(
  "i"=>"シークレットキー。",
  "text"=>$rand
  );

  $data = json_encode($data);

  $options = array(

  'http' => array(
  'method'=> 'POST',
  'header'=> 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
  'content' => $data
  )
  );

  $context = stream_context_create($options);

  $contents = file_get_contents('https://misskey.io/api/notes/create', false, $context);

  echo "contents => $contents";
?>
