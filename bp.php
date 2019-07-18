<?php
require __DIR__ . '/functions.php';
define('API_KEY','872448072:AAEG2285qN0lD09ljBjJjIZ-xWmrTlkFniY');

$admin = "3428486";
$adminuser = "Mudres"; 
$admin2 = "715987186";
$channel = "-1001434669859";

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user = $message->from->username;

if(!$user) {
    $user = "Йўқ";
}

$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$time = date('H:i:s', strtotime('5 hour'));
$step = file_get_contents("step/$cid.step");
$menu = file_get_contents("step/$cid.menu");
$stepe = file_get_contents("step/$cbid.step");
$menue = file_get_contents("step/$cbid.menu");
mkdir("step");
$filee = "coin/$cid.step";
$folder = "coin";
$folder2 = "azo";
//$kun1 = date('H:i:s', strtotime('5 hour'));


if (!file_exists($folder.'/test.txt')) {
  mkdir($folder);
  file_put_contents($folder.'/test.txt', 'by ');
}

if (!file_exists($folder2.'/test.txt')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.txt', 'by ');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);
}





$otex = "❌ Бекор килиш";
$nazad = "❌ Отменить";

$keys = json_encode([
'resize_keyboard'=>true,    
'keyboard'=> [
    [
      ['text'=>"📋Рўйхатдан ўтиш"]
    ],
    [
      ['text'=>"👤Менинг профилим"],
      ['text'=>"👨‍💻Админ билан богланиш"]
    ],
    [
     
      ['text'=>"📊Статистика"],['text'=>"🗂Инфо"]
    ],
  ]
]);

$rukeys = json_encode([
  'resize_keyboard'=>true,    
  'keyboard'=> [
      [
        ['text'=>"📋Регистрироваться"]
      ],
      [
        ['text'=>"👤Мой профиль"],
        ['text'=>"👨‍💻Администратор"]
      ],
      [
       
        ['text'=>"📊Статистика"],['text'=>"🗂Инфо"]
      ],
    ]
  ]);

  $enkeys = json_encode([
    'resize_keyboard'=>true,    
    'keyboard'=> [
        [
          ['text'=>"📋Registration"]
        ],
        [
          ['text'=>"👤My account"],
          ['text'=>"👨‍💻Administrator"]
        ],
        [
         
          ['text'=>"📊Statics"],['text'=>"🗂Info"]
        ],
      ]
    ]);

$hide = json_encode([
    'hide_keyboard'=>true,    
    ]);

$apanel = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
  [['text'=>"📫Bot foydalanuvchilariga rassilka"],],
  [['text'=>"♠️Balansni kopaytirish"],],
  
  ]
  ]);
      

$otmen = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex"],],
]
]);

$language = json_encode(
    ['inline_keyboard' => [
    [['callback_data' => "uzbek", 'text' => "🇺🇿 Ўзбек"],['callback_data' => "rus", 'text' => "🇷🇺 Русский"],['callback_data' => "english", 'text' => "🇬🇧 English"],],
    ]
    ]);

$manzil = json_encode(
['inline_keyboard' => [
[['callback_data' => "Кичик", 'text' => "▫️Кичик"],['callback_data' => "Ўрта", 'text' => "◽️Урта"],['callback_data' => "Катта", 'text' => "◻️Катта"]],
]
]);

$rufaoliyat = json_encode(
  ['inline_keyboard' => [
  [['callback_data' => "Маленький", 'text' => "▫️Маленький"],['callback_data' => "Средный", 'text' => "◽️Средный"],['callback_data' => "Большой", 'text' => "◻️Большой"]],
  ]
  ]);

$tasdiq = json_encode(
['inline_keyboard' => [
[['callback_data' => "ok", 'text' => "Xa✅"],['callback_data' => "clear", 'text' => "Йук❌"],],
]
]);

$rutasdiq = json_encode(
  ['inline_keyboard' => [
  [['callback_data' => "okru", 'text' => "Да✅"],['callback_data' => "clear", 'text' => "Нет❌"],],
  ]
  ]);
  

if(isset($tx)){
ty($cid);
}


$balinfo = "🇺🇿 Илтимос тилни танланг! /
🇷🇺 Пожалуйта выберите язык!";
//if($message==$message){
if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {
  /*if($cid == $admin or $admin2) {
    bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"Siz adminsiz.Va siz botni boshqarish huquqiga egasiz!",
      'reply_markup'=>$keys
      ]);
  */
      
  
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"🇺🇿 Илтимос тилни танланг! 
🇷🇺 Пожалуйта выберите язык!
🇬🇧 Please select language!",
    'reply_markup'=>$language
    ]);
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=file_get_contents("baza.dat");
    file_put_contents("coin.dat","$baza\n$cid");
  }
if(strpos($tx,"/start $cid")!==false){
}
  }
$abb=file_get_contents("coin/$cid.dat");
if($abb){}else{
  file_put_contents("coin/$cid.dat", "0");

}



if($tx == "👨‍💻Админ билан богланиш"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"👇 Админ билан богланиш учун кнопкани босинг",
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['url' => "telegram.me/$adminuser", 'text' => "👨‍💻Админ"],],
[['url' => "telegram.me/Balanceprouz", 'text' => "📡Расмий канал"],],
]
]),
]);
}

if($tx == "👤Менинг профилим"){
    bot('sendMessage', [
    'chat_id'=>$cid,
    //'parse_mode'=>'markdown',
    'text'=>"👔 Сизнинг маьлумотларингиз:
    👤Исмингиз: $name
    ⛓Юзернеймингиз: $user
    ✔️Телеграм Ид: $cid ",
    'reply_markup'=>json_encode(
    ['inline_keyboard' => [
    [['url' => "telegram.me/Balanceprouz", 'text' => "📡Расмий канал"],],
    ]
    ])
    ]);
    }
    if($tx=="📊Статистика"){
        $a=file_get_contents("coin.dat");
        $sum=file_get_contents("tolovlar.txt");
        $ab=substr_count($a,"\n");
        $stat=$ab+2455;
        bot('sendmessage',[
            'chat_id'=>$cid,
            'parse_mode'=>'markdown', 
            'text'=>"Бот аьзолари: *$ab* та

⏰ $time"
            
            ]);
        
    }


    /*if($tx == "/start"){
        bot('sendMessage', [
        'chat_id'=>$cid,
        'text'=>"🇺🇿 Илтимос тилни танланг! /
        🇷🇺 Пожалуйта выберите язык!",
        'reply_markup'=>$language,
        //'reply_markup'=>$hide,
        ]);
        bot('sendMessage', [
        'chat_id'=>$cid,
        'text'=>"$nomessage",
        'reply_markup'=>$hide,
        ]);
        }
*/

if($data == "uzbek"){
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'text'=> "🔔 Сиз ўзбек тилини танладингиз!",
   'show_alert'=>true
     ]);
bot('sendMessage', [
'chat_id'=>$idd,
'text'=>"🧰Бизнесингиз учун бухгалтерия консалтинг хизматлари.
Биз молиявий консалтинг йўналишида ўнлаб бизнесларнинг муваффақиятли фаолиятига ўз ҳиссамизни қўшиб келмоқдамиз. Сиз ҳам улар қаторида бўлишни хоҳлайсизми?

📋Ҳозироқ рўйхатдан ўтинг👇",
'reply_markup'=>$keys,
]);
bot('deleteMessage', [
    'chat_id'=>$idd,
    'message_id'=>$mid,
]);
}

if($data=="rus"){
    bot('answerCallbackQuery',[
     'callback_query_id'=>$cqid,
     'text'=> "🔔 Вы выбрали Русский язык!",
    'show_alert'=>true
      ]);
      bot('sendMessage', [
        'chat_id'=>$idd,
        'text'=>"🧰Бухгалтерские и консалтинговые услуги для вашего бизнеса.
Мы способствуем успешной работе десятков предприятий в сфере финансового консультирования. Вы хотите быть среди них?

        📋Регистрировайте сейчас👇",
        'reply_markup'=>$rukeys,
        ]);
        bot('deleteMessage', [
            'chat_id'=>$idd,
            'message_id'=>$mid,
        ]);
}

if($data=="english"){
  bot('answerCallbackQuery',[
   'callback_query_id'=>$cqid,
   'text'=> "⌛️ There are going some technical works ⚒ 
Try later!",
  'show_alert'=>true
    ]);
}

// uy uchun
if($tx == "📋Рўйхатдан ўтиш"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*Ташкилот номини киритинг*",
'parse_mode'=>'markdown',
'reply_markup'=>$otmen,
]);
pstep($cid,"0");
put("step/$cid.menu","uy");
}

if($step == "0" and $menu == "uy"){
if($tx == $otex){}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*Фаолият турини киритинг*",
'parse_mode'=>'markdown',
'reply_markup'=>$otmen,
]);
nextTx($cid, "🏢 ".$tx);
step($cid);
}
}

if($step == "1" and $menu == "uy"){
if($tx == $otex){}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*Ташкилот очилган йилни киритинг*
_(Масалан 2001)_",
'parse_mode'=>'markdown',
'reply_markup'=>$otmen,
]);
nextTx($cid, "✅ ".$tx);
step($cid);
}
}

/*if($step == "2" and $menu == "uy"){
if($tx == $otex){}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Ботга рақам жўнатинг",
]);
nextTx($cid, "⌛️".$tx);
step($cid);
}
}
*/

$photo_id = $message->photo[1]->file_id;
if($step == "2" and $menu == "uy"){
put("step/$cid.photo","$photo_id");
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*☝️Ташкилот телефон номерини киритинг:*
_(+99891 2345678 шаклда)_",
'parse_mode'=>'markdown',
'reply_markup'=>$otmen,
]);

nextTx($cid, "⌛️".$tx);
step($cid);
}

/*if($step == "3" and $menu == "uy" and isset($tx)){
if($tx == $otex){}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>$rasm,
]);
}
}
*/
if($step == "3" and $menu == "uy"){
if($tx == $otex){}else{
if(mb_stripos($tx,"+9989")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*☝️ Фаолият турини танланг*",
'parse_mode'=>'markdown',
'reply_markup'=>$manzil,
]);
nextTx($cid, "📞 ".$tx);
step($cid);
}else{
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*☝️ Телефон номерни киритинг:*
_(+99891 2345678 шаклда)_",
'parse_mode'=>'markdown',
'reply_markup'=>$otmen,
]);
}
}
}

if(isset($data) and $stepe == "4" and $menue == "uy"){
ACL($ida);
$baza = file_get_contents("step/$cbid.txt");
bot('sendMessage',[
'chat_id'=>$cbid,
'text'=>"<b>Энди маьлумотни тасдиқланг:</b>$baza

📡 $data

👉 @Mudres
",
'parse_mode'=>'html',
'reply_markup'=>$tasdiq,
]);
nextTx($cbid, "📡 ".$data);
step($cbid);
}

if($data == "ok" and $stepe == "5" and $menue == "uy"){
ACL($ida);
$baza = file_get_contents("step/$cbid.txt");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>Янги маьлумот келди:</b>
Id: $cbid
Username: @$cbuser
<a href='tg://user?id=$cbid'>Захиравий профилга кириш</a>

$baza

👉 @Mudres",
'parse_mode'=>'html',
]);
bot('sendMessage',[
'chat_id'=>$cbid,
'text'=>"✅ Сизнинг маьлумотингиз Админларимиз томонидан кўриб чиқилади ва сизга мурожаат қилишади!",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
del($cbid);
}
// Ozbek tili tugadi

if($tx == "📋Регистрироваться"){
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*Введите название организации*",
  'parse_mode'=>'markdown',
  'reply_markup'=>$nazad,
  ]);
  pstep($cid,"0");
  put("step/$cid.menu","ru");
  }
  
  if($step == "0" and $menu == "ru"){
  if($tx == $nazad){}else{
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*Введите вид деятельности*",
  'parse_mode'=>'markdown',
  'reply_markup'=>$nazad,
  ]);
  nextTx($cid, "🏢 ".$tx);
  step($cid);
  }
  }
  
  if($step == "1" and $menu == "ru"){
  if($tx == $nazad){}else{
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*Введите год, открытая организация*
  _(Например 2001)_",
  'parse_mode'=>'markdown',
  'reply_markup'=>$nazad,
  ]);
  nextTx($cid, "✅ ".$tx);
  step($cid);
  }
  }
  
  $photo_id = $message->photo[1]->file_id;
  if($step == "2" and $menu == "ru"){
  put("step/$cid.photo","$photo_id");
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*☝️Введите корпоративный номер телефона:*
  _(Например: +998912345678)_",
  'parse_mode'=>'markdown',
  'reply_markup'=>$nazad,
  ]);
  
  nextTx($cid, "⌛️".$tx);
  step($cid);
  }
  
  if($step == "3" and $menu == "ru"){
  if($tx == $nazad){}else{
  if(mb_stripos($tx,"+9989")!==false){
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*☝️ Выберите вид деятельности*",
  'parse_mode'=>'markdown',
  'reply_markup'=>$rufaoliyat,
  ]);
  nextTx($cid, "📞 ".$tx);
  step($cid);
  }else{
  bot('sendMessage', [
  'chat_id'=>$cid,
  'text'=>"*☝️ Введите корпоративный номер телефона::*
  _(Например +998912345678)_",
  'parse_mode'=>'markdown',
  'reply_markup'=>$nazad,
  ]);
  }
  }
  }
  
  if(isset($data) and $stepe == "4" and $menue == "ru"){
  ACL($ida);
  $baza = file_get_contents("step/$cbid.txt");
  bot('sendMessage',[
  'chat_id'=>$cbid,
  'text'=>"<b>Тепрерь подтвердите информации:</b>$baza
  
  📡 $data
  
  👉 @Mudres
  ",
  'parse_mode'=>'html',
  'reply_markup'=>$rutasdiq,
  ]);
  nextTx($cbid, "📡 ".$data);
  step($cbid);
  }
  
  if($data == "okru" and $stepe == "5" and $menue == "ru"){
  ACL($ida);
  $baza = file_get_contents("step/$cbid.txt");
  bot('sendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>Новая фирма :</b>
  Id: $cbid
  Username: @$cbuser
  <a href='tg://user?id=$cbid'>Войти в запасный профиль</a>
  
  $baza
  
  👉 @Mudres",
  'parse_mode'=>'html',
  ]);
  bot('sendMessage',[
  'chat_id'=>$cbid,
  'text'=>"✅ Пожалуйта подождите! Ваши информации будет обработана!",
  'parse_mode'=>'html',
  'reply_markup'=>$keys,
  ]);
  del($cbid);
  }




if($tx == $otex or $data == "clear"){
ACL($ida);
del($cbid);
del($cid);
if(isset($tx)) $url = "$cid";
if(isset($data)) $url = "$cbid";
bot('sendMessage', [
'chat_id'=>$url,
'text'=>"Рўйхатдан ўтиш бекор қилинди",
'reply_markup'=>$keys,
]);
}

if($tx == $nazad){
  ACL($ida);
  del($cbid);
  del($cid);
  if(isset($tx)) $url = "$cid";
  if(isset($data)) $url = "$cbid";
  bot('sendMessage', [
  'chat_id'=>$url,
  'text'=>"Регистратсия отменено",
  'reply_markup'=>$keys,
  ]);
  }

/*if ($text != '/start' && $text != '/admin' && $text != '📋Рўйхатдан ўтиш' && $text != '👤Менинг маьлумотим' && $text != '👨‍💻Админ билан богланиш') {
    bot('sendMessage', [
        'chat_id'=>$cid,
        'text'=>"Мен оддий сўзларни тушунмайиан, илтимос бу хабарни админга жўнатинг",
        'reply_markup'=>$language,
    ]);
}
*/

/*
$replyik = $message->reply_to_message->text;
$yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

if($tx == "📫Bot foydalanuvchilariga rassilka" and $cid == $admin or $admin2){
  ty($cid);
  //$key3 = "Bekor qilish";
  bot('sendMessage',[
  'chat_id'=>$cid,
  'parse_mode'=>'markdown',
  'text'=>$yubbi,
  'reply_markup'=>$key3,
  ]);
  file_put_contents("coin/$cid.step","sendall");
}

if($step == "send" and $cid == $admin or $admin2){
  ty($cid);
  if($tx == "$key3"){
  del("coin/$cid.step");
  }else{
  ty($cid);
  $idss=file_get_contents("coin.dat");
  $idszs=explode("\n",$idss);
  foreach($idszs as $idlat){
  bot('sendMessage',[
  'chat_id'=>$idlat,
  'text'=>$tx,
  'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"🔶Расмий канал",'url'=>"https://t.me/balanceprouz"]],
]
])
]);
} 
  del("coin/$cid.step");

  }
}
*/
/*else{
  bot('sendMessage', [
    'chat_id'=>$cid,
    'text'=>"Мен оддий сўзларни тушунмайиан, илтимос бу хабарни админга жўнатинг",
    'reply_markup'=>$keys,
]);
}
*/

?>
