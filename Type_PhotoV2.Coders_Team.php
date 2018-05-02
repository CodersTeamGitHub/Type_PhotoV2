<?php

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

ob_start();

$API_KEY = '';//Token

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}

function MakeBlood(String $text): String{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://wrapapi.com/use/Wathiq/tools/effects/1.1.0");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "text" => $text,
    "wrapAPIKey" => "gVaKVRrkVwghNz44sTGyMepk1uMICOi6"
  ]));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  $data = json_decode($response, true);

  return $data['data']['src'];
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

function MakeP2(String $text): String{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://wrapapi.com/use/Wathiq/tools/effects2/1.0.0");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "text" => $text,
    "wrapAPIKey" => "gVaKVRrkVwghNz44sTGyMepk1uMICOi6"
  ]));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  $data = json_decode($response, true);

  return $data['data']['src'];
}
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP
$data = explode('-', $data);

 
if ($text == '/start') {
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- مرحبا بك ؛ [$name](tg://user?id=$chat_id)

• في بوت الكتابة بالصور ، 🎇
• يحتوي البوت على انواع عديدة من الصور ، 🔗
• كل ماعليك ارسال اسمك باللغة الانكليزية ، ✨
• واختيار نوع من انواع الصور الذي يقوم بارسالهن البوت ، 🔰
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
", 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "اصــنع بوت خاص بك", 'url' => "https://t.me/CodersTeam_Offical"]], ]]) ]);
}

if($text && $from_id !== $sudo){
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}

if ($text and $message->reply_to_message) {
  bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}


if ($text != '/start') {
	bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "• الان قم باختيار التصميم الذي تريدة ، ⚠️
• الأسم ؛ $text ؛ 🔰", 'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>'• بالشمع والورد ، 🌪 •','callback_data'=>'cand3-'.$text]],
[['text' => '- بالشمع والجكليت ، ⛱', 'callback_data' => 'cand2-' . $text], ['text' => '- بالشمع ، 🕯', 'callback_data' => 'cand-' . $text]], [['text' => '- بالنار ، 🔥', 'callback_data' => 'fire-' . $text], ['text' => '- بالحجر ، 🏔', 'callback_data' => 'stone-' . $text]],[['text'=>'- بالبرق ، 🔰','callback_data'=>'br-'.$text],['text'=>'- بالحلقة ، 💍','callback_data'=>'ci-'.$text]],
[['text'=>'- بالقلوب ، 💚','callback_data'=>'ha-'.$text],['text'=>'- بالجكليت ، 🍬','callback_data'=>'ca-'.$text]],
[['text'=>'- بالورد واللماع ، ✨','callback_data'=>'lma-'.$text],
['text'=>'- بالگليتر ، 🌟','callback_data'=>'kle-'.$text]],
[['text'=>'- بالورد ، 🌼','callback_data'=>'wrd-'.$text],['text'=>'- بالرمل ، 🏖','callback_data'=>'rml-'.$text]],
[['text'=>'- بالألوان ، 🌈','callback_data'=>'alw-'.$text],['text'=>'- بالخرز ، 🌒','callback_data'=>'khrz-'.$text]],
[['text'=>'بالحلـقه جـزء2🙊💓','callback_data'=>'asoo-'.$text],
['text'=>'بلسـناب➰💋','callback_data'=>'loop-'.$text]],
[['text'=>'🦅بل باندا🐼','callback_data'=>'rook-'.$text],
['text'=>'بلضوء💓🦅','callback_data'=>'qoop-'.$text]],
[['text'=>'بلحلقه جزء3🤷‍♂🙊','callback_data'=>'asdx-'.$text],
['text'=>'2بل بـرق جزء⛈⚡️','callback_data'=>'miin-'.$text]],
[['text'=>'بل قلـوب🌪💓','callback_data'=>'nool-'.$text],
['text'=>'- بل ورق 💖📿🔬','callback_data'=>'diiu-'.$text]],
[['text'=>'- بلذهب 💖📿🔬','callback_data'=>'koopd-'.$text],
['text'=>'- بل صداميه 💖📿🔬','callback_data'=>'koopt-'.$text]],
[['text'=>'- بالدم ، 💉','callback_data'=>'dm#'.$text],['text'=>'- بالطباشير ، ✏️','callback_data'=>'tp#'.$text]],
[['text'=>'• اصنع بوتك الخاص ، ❇️ •','url'=>'https://t.me/CodersTeam_Offical']],

]]) ]);
}

  if (preg_match('/dm\#.*/', $data0)) {
     
    $text = str_replace('dm#', '', $data0);
    
      
  bot('sendPhoto', [
    'chat_id' => $chat_id2,
    'photo' => MakeBlood($text),
    'caption' => 'تـم تحميل الـصوره'
  ]);
      }
if (preg_match('/tp\#.*/', $data0)) {
   
    $text = str_replace('tp#', '', $data0);
         bot('sendphoto',[
      'chat_id'=>$chat_id2,
       'photo'=>MakeP2($text),
       'caption'=> "BT : تم تحميل الصوره"
      ]);
      }
     
if ($data[0] == 'khrz') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/khr/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}
if ($data[0] == 'ca') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/pho/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 700, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,'out.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,"out1.jpg");
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile('out1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
}
if ($data[0] == 'ha') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/kl/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}
if ($data[0] == 'ci') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/hl/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

if ($data[0] == 'br') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/br/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

if ($data[0] == 'stone') {
  $text = $data[1];
  if (preg_match('/[a-z]/', $text)) {
  	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
    foreach($str as $char) {
      $im[] = 'https://ddyd.000webhostapp.com/photos/' . $char . '.jpg';
    }
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

if ($data[0] == 'fire') {
  $text = $data[1];
  if (preg_match('/[a-z]/i', $text)) {
  	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
    foreach($str as $char) {
      $im[] = 'https://ddyd.000webhostapp.com/p/' . $char . '.jpg';
    }
    if (count($str) == 1) {
      file_put_contents($chat_id2 . '.jpg', file_get_contents($im[0]));
      $data = getimagesize("$chat_id2.jpg");
      $dest = imagecreatefromjpeg("$chat_id2.jpg");
      $src = imagecreatetruecolor($data[0] + 250, $data[1]);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 125, 0, 0, 0, $data[0], $data[1]);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 2) {
      $img = imagecreatetruecolor(1300, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 10, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 740);
      imagepng($img1, $chat_id2 . '.jpg');
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
    }

    if (count($str) == 3) {
      $img = imagecreatetruecolor(1920, 740);
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 740, 0, 0, 0, 640, 740);
      imagepng($img2, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(1920, 1920);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 600, 0, 0, 1920, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 4) {
      $img = imagecreatetruecolor(2560, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 20, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 740);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 740);
      $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 740]);
      imagepng($img3, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      $dest = imagecreatefrompng($chat_id2 . '.jpg');
      $src = imagecreatetruecolor(2560, 2560);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 900, 0, 0, 2560, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 5) {
      $img = imagecreatetruecolor(3200, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 20, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 740);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 740);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 740);
      imagepng($img4, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(3200, 3200);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 1200, 0, 0, 3200, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 6) {
      $img = imagecreatetruecolor(3840, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 20, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 740);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 740);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 740);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 740);
      imagepng($img5, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(3840, 3840);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 1500, 0, 0, 3840, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 7) {
      $img = imagecreatetruecolor(4480, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 20, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 740);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 740);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 740);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 740);
      imagepng($img5, '6.png');
      $img6 = imagecreatefrompng('6.png');
      $cur6 = imagecreatefromjpeg($im[6]);
      imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 740);
      imagepng($img6, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      unlink('6.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(4480, 4480);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 1800, 0, 0, 4480, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 8) {
      $img = imagecreatetruecolor(5120, 740);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 20, 0, 0, 0, 640, 740);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 740);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 740);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 740);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 740);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 740);
      imagepng($img5, '6.png');
      $img6 = imagecreatefrompng('6.png');
      $cur6 = imagecreatefromjpeg($im[6]);
      imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 740);
      imagepng($img6, '7.png');
      $img7 = imagecreatefrompng('7.png');
      $cur7 = imagecreatefromjpeg($im[7]);
      imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 740);
      imagepng($img7, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      unlink('6.png');
      unlink('7.png');
      $dest = imagecreatefrompng($chat_id2 . '.jpg');
      $src = imagecreatetruecolor(5120, 5120);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 1000, 0, 0, 5120, 740);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (!isset($im[0])) {
      bot('sendMessage', ['chat_id' => $chat_id2, 'text' => '• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️']);
    }
  }
  else {
    bot('sendMessage', ['chat_id' => $chat_id2, 'text' => '• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌']);
  }

  unlink($chat_id2 . '1.jpg');
  unlink($chat_id2 . '.jpg');
}

if ($data[0] == 'cand') {
  $text = $data[1];
  if (preg_match('/[a-z]/i', $text)) {
  	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
    foreach($str as $char) {
      $im[] = 'https://ddyd.000webhostapp.com/phot/' . $char . '.jpg';
    }

    if (count($str) == 1) {
      file_put_contents($chat_id2 . '.jpg', file_get_contents($im[0]));
      $data = getimagesize("$chat_id2.jpg");
      $dest = imagecreatefromjpeg("$chat_id2.jpg");
      $src = imagecreatetruecolor($data[0] + 250, $data[1]);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 125, 0, 0, 0, $data[0], $data[1]);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 2) {
      $img = imagecreatetruecolor(800, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 400, 0, 0, 0, 640, 700);
      imagepng($img1, $chat_id2 . '.jpg');
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
    }

    if (count($str) == 3) {
      $img = imagecreatetruecolor(1080, 700);
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(1050, 1050);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 200, 0, 0, 1050, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 4) {
      $img = imagecreatetruecolor(1500, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1100, 0, 0, 0, 640, 700);
      $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 700]);
      imagepng($img3, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      $dest = imagecreatefrompng($chat_id2 . '.jpg');
      $src = imagecreatetruecolor(1450, 1450);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 450, 0, 0, 1450, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 5) {
      $img = imagecreatetruecolor(1900, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1100, 0, 0, 0, 640, 700);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 1500, 0, 0, 0, 640, 700);
      imagepng($img4, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(1900, 1900);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 650, 0, 0, 1900, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 6) {
      $img = imagecreatetruecolor(2200, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1100, 0, 0, 0, 640, 700);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 1500, 0, 0, 0, 640, 700);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 1800, 0, 0, 0, 640, 700);
      imagepng($img5, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(2200, 2200);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 800, 0, 0, 2200, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 7) {
      $img = imagecreatetruecolor(400 * 7 - 180, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1100, 0, 0, 0, 640, 700);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 1500, 0, 0, 0, 640, 700);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 1800, 0, 0, 0, 640, 700);
      imagepng($img5, '6.png');
      $img6 = imagecreatefrompng('6.png');
      $cur6 = imagecreatefromjpeg($im[6]);
      imagecopy($img6, $cur6, 2200, 0, 0, 0, 640, 700);
      imagepng($img6, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      unlink('6.png');
      $dest = imagecreatefrompng($chat_id2 . ".jpg");
      $src = imagecreatetruecolor(400 * 7 - 180, 400 * 7 - 180);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 950, 0, 0, 400 * 7 - 180, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (count($str) == 8) {
      $img = imagecreatetruecolor(400 * 7 - 180, 700);
      imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
      $cur = imagecreatefromjpeg($im[0]);
      imagecopy($img, $cur, 0, 0, 0, 0, 640, 700);
      imagedestroy($cur);
      imagepng($img, '1.png');
      $img1 = imagecreatefrompng('1.png');
      $cur1 = imagecreatefromjpeg($im[1]);
      imagecopy($img1, $cur1, 380, 0, 0, 0, 640, 700);
      imagepng($img1, '2.png');
      $img2 = imagecreatefrompng('2.png');
      $cur2 = imagecreatefromjpeg($im[2]);
      imagecopy($img2, $cur2, 700, 0, 0, 0, 640, 700);
      imagepng($img2, '3.png');
      $img3 = imagecreatefrompng('3.png');
      $cur3 = imagecreatefromjpeg($im[3]);
      imagecopy($img3, $cur3, 1100, 0, 0, 0, 640, 700);
      imagepng($img3, '4.png');
      $img4 = imagecreatefrompng('4.png');
      $cur4 = imagecreatefromjpeg($im[4]);
      imagecopy($img4, $cur4, 1500, 0, 0, 0, 640, 700);
      imagepng($img4, '5.png');
      $img5 = imagecreatefrompng('5.png');
      $cur5 = imagecreatefromjpeg($im[5]);
      imagecopy($img5, $cur5, 1800, 0, 0, 0, 640, 700);
      imagepng($img5, '6.png');
      $img6 = imagecreatefrompng('6.png');
      $cur6 = imagecreatefromjpeg($im[6]);
      imagecopy($img6, $cur6, 2200, 0, 0, 0, 640, 700);
      imagepng($img6, '7.png');
      $img7 = imagecreatefrompng('7.png');
      $cur7 = imagecreatefromjpeg($im[7]);
      imagecopy($img7, $cur7, 2800, 0, 0, 0, 640, 700);
      imagepng($img7, $chat_id2 . '.jpg');
      unlink('1.png');
      unlink('2.png');
      unlink('3.png');
      unlink('4.png');
      unlink('5.png');
      unlink('6.png');
      unlink('7.png');
      $dest = imagecreatefrompng($chat_id2 . '.jpg');
      $src = imagecreatetruecolor(5120, 5120);
      imagefill($src, 0, 0, imagecolorallocate($src, 255, 255, 255));
      imagecopy($src, $dest, 0, 1000, 0, 0, 5120, 700);
      imagejpeg($src, $chat_id2 . '1.jpg');
      imagedestroy($src);
      imagedestroy($dest);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '.jpg') ]);
      bot('sendPhoto', ['chat_id' => $chat_id2, 'photo' => new CURLFile($chat_id2 . '1.jpg') ]);
    }
    elseif (!isset($im[0])) {
      bot('sendMessage', ['chat_id' => $chat_id2, 'text' => '• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️']);
    }
  }
  else {
    bot('sendMessage', ['chat_id' => $chat_id2, 'text' => '• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌']);
  }

  unlink($chat_id2 . '1.jpg');
  unlink($chat_id2 . '.jpg');
}

if ($data[0] == 'cand2') {
$text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/jk/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

if ($data[0] == 'cand3') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'http://devel-point.ga/cand/photos/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  if ($data[0] == 'lma') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/lm/' . $char . '.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}
 if ($data[0] == 'kle') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/ph/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}
  
  if ($data[0] == 'wrd') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/photo/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}
  
  if ($data[0] == 'rml') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/rml/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

///////////////////


if ($data[0] == 'asoo') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam17.000webhostapp.com/hnoo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
  
  if ($data[0] == 'loop') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam17.000webhostapp.com/knoo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
  if ($data[0] == 'rook') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/aloo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
  
  if ($data[0] == 'qoop') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/boon/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
  if ($data[0] == 'asdx') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/gool/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  /////////////////
  
  
  if ($data[0] == 'koopt') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam119.000webhostapp.com/ملف1/poopo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
   
  if ($data[0] == 'koopd') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/ملف2/popo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP
  
  
  
  if ($data[0] == 'miin') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/kool/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
  
  
  if ($data[0] == 'nool') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ailweesam18.000webhostapp.com/skoo/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }
  
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP
  
  if ($data[0] == 'diiu') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://bl-saadmohammed.000webhostapp.com/w5ae/'.$char.'.jpg';
}

if(count($str) == 1){
    file_put_contents($chat_id2.'.jpg',file_get_contents($im[0]));
    $data = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($data[0] + 250,$data[1]);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 125, 0, 0, 0 ,$data[0] , $data[1]);
  imagejpeg($src,$chat_id2.'1.jpg');
  imagedestroy($src);
  imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 2){
    $img = imagecreatetruecolor(1300, 1280);
    imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 10, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 650, 0, 0, 0, 640, 1280);
    imagepng($img1,$chat_id2.'.jpg');
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1280);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1280);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 350, 0, 0 ,1920 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1280]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 650, 0, 0 ,2560 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,3200 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1250, 0, 0 ,3840 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3600, 0, 0, 0, 640, 1280);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1280);imagefill($img, 0, 0, imagecolorallocate($img,255,255,255));
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1280);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1280);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1280);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1280);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1280);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1280);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1280);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1280);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1280);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(!isset($im[0])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 1 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
  }



///////////////////


  
  if ($data[0] == 'alw') {
  $text = $data[1];
      if(preg_match('/[a-z]/',$text)){
      	bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);
    $str = str_split(strtolower($text));
  foreach($str as $char){
    $im[] = 'https://ddyd.000webhostapp.com/alw/'.$char.'.jpg';
}
if(count($str) == 3){
    $img = imagecreatetruecolor(1920, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 0, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1280, 0, 0, 0, 640, 1020);
    imagepng($img2,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(1920,1920);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 500, 0, 0 ,1920 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 4){
    $img = imagecreatetruecolor(2560, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    $imm3 = imagecrop($img3, ['x' => 20, 'y' => 20, 'width' => 2560, 'height' => 1020]);
    imagepng($img3,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    $dest = imagecreatefrompng($chat_id2.'.jpg');
    $src = imagecreatetruecolor(2560,2560);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 800, 0, 0 ,2560 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 5){
    $img = imagecreatetruecolor(3200, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3200,3200);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1200, 0, 0 ,3200 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 6){
    $img = imagecreatetruecolor(3840, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(3840,3840);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1500, 0, 0 ,3840 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} elseif(count($str) == 7){
    $img = imagecreatetruecolor(4480, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    $dest = imagecreatefrompng($chat_id2.".jpg");
    $src = imagecreatetruecolor(4480,4480);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1800, 0, 0 ,4480 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
}
elseif(count($str) == 8){
    $img = imagecreatetruecolor(5120, 1020);
    $cur = imagecreatefromjpeg($im[0]);
    imagecopy($img, $cur, 20, 0, 0, 0, 640, 1020);
    imagedestroy($cur);
    imagepng($img,'1.png');
    $img1 = imagecreatefrompng('1.png');
    $cur1 = imagecreatefromjpeg($im[1]);
    imagecopy($img1, $cur1, 640, 0, 0, 0, 640, 1020);
    imagepng($img1,'2.png');
    $img2 = imagecreatefrompng('2.png');
    $cur2 = imagecreatefromjpeg($im[2]);
    imagecopy($img2, $cur2, 1260, 0, 0, 0, 640, 1020);
    imagepng($img2,'3.png');
    $img3 = imagecreatefrompng('3.png');
    $cur3 = imagecreatefromjpeg($im[3]);
    imagecopy($img3, $cur3, 1880, 0, 0, 0, 640, 1020);
    imagepng($img3,'4.png');
    $img4 = imagecreatefrompng('4.png');
    $cur4 = imagecreatefromjpeg($im[4]);
    imagecopy($img4, $cur4, 2520, 0, 0, 0, 640, 1020);
    imagepng($img4,'5.png');
    $img5 = imagecreatefrompng('5.png');
    $cur5 = imagecreatefromjpeg($im[5]);
    imagecopy($img5, $cur5, 3160, 0, 0, 0, 640, 1020);
    imagepng($img5,'6.png');
    $img6 = imagecreatefrompng('6.png');
    $cur6 = imagecreatefromjpeg($im[6]);
    imagecopy($img6, $cur6, 3800, 0, 0, 0, 640, 1020);
    imagepng($img6,'7.png');
    $img7 = imagecreatefrompng('7.png');
    $cur7 = imagecreatefromjpeg($im[7]);
    imagecopy($img7, $cur7, 4440, 0, 0, 0, 640, 1020);
    imagepng($img7,$chat_id2.'.jpg');
    unlink('1.png');
    unlink('2.png');
    unlink('3.png');
    unlink('4.png');
    unlink('5.png');
    unlink('6.png');
    unlink('7.png');
    $dest = imagecreatefrompng("out.jpg");
    $src = imagecreatetruecolor(5120,5120);
    imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
    imagecopy($src, $dest, 0, 1000, 0, 0 ,5120 , 1020);
    imagejpeg($src,$chat_id2.'1.jpg');
    imagedestroy($src);
    imagedestroy($dest);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg')
    ]);
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg')
    ]);
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• يرجى ارسال كلمة تتكون ، 📌
• من 3 الى 8 حروف ، ⚠️'
  ]);
}
  } else {
      bot('sendMessage',[
    'chat_id'=>$chat_id2,
    'text'=>'• ارسل حروف انكليزيةه ، 👋🏻
• بدون علامات ورموز وارقام ، 📌'
  ]);
  }
  unlink($chat_id2.'1.jpg');
  unlink($chat_id2.'.jpg');
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP
