<?php

$botToken = "7101786051:AAHAOW5fLC7qncwVgKjDea-E4ew420s_wEo";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>@xoxevilxd</code>';
$botu = "𝐁𝐨𝐭 𝐔𝐩𝐝𝐚𝐭𝐞𝐬 ↯ @cc_x_dark";
$bota = "<b>|×| DEV ↯ @xoxevilxd</b>";$eror = "<b>Error ❌</b>";

$dd = "𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌";
$live = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅";

$ltca = "ltc1qhl8qfwlwl08pr9d4smp960d96hth3l9yvxjuuw";
$btca = "bc1qtc7vuajuk8etl5gmge4txg3y8w5e56zr62tkkq";
$usdta = "0xc66d9e5c63A974Fb62Ad4928B3030143e1050837";
$trxa = "TRaLJkHovrw14eKFGSB6qdNsHBPvMmYaKo";
$bpayid = "779485968";

$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
$owner = '<code>@xoxevilxd</code>';



/////Cmd Back2 \\\\

if ($cdata2 == "back2") {
    $gatesText = "ᴡᴇʟᴄᴏᴍᴇ ʙᴀʙʏ🥵,ɪ ᴛʜɪɴᴋ ʏᴏᴜ ᴡᴀɴᴛ ᴛᴏ ᴄᴏᴛʀᴏʟ ᴍɪɴᴇ ᴡʜᴏʟᴇ ʙᴏᴅʏ🤤.

ᴛᴏ ɢᴇᴛ ᴍʏ ᴄᴏᴍᴘʟᴇᴛᴇ ᴀᴄᴇss ᴊᴜsᴛ ᴅᴍ ᴍɪɴᴇ ᴏᴡɴᴇʀ ʜᴇ'ʟʟ ʟᴇᴛ ʏᴏᴜ ᴛᴏ ᴜsᴇ ᴍᴇ ᴜᴛɪʟ ʜᴇ ᴡᴀɴᴛs ᴅᴍ @xoxevilxD";


                                 $gatesKeyboard = json_encode([
                                 'inline_keyboard' => [
                                     [['text' => '𝕲𝖆𝖙𝖊𝖜𝖆𝖞𝖘', 'callback_data' => 'gates'],
                               ['text' => '𝕿𝖔𝖔𝖑 𝕶𝖎𝖙', 'callback_data' => 'herr'],
                               ],
                               [
                               ['text' => '𝕸𝖞 𝖂𝖔𝖗𝖑𝖉', 'callback_data' => 'channel'],
                           ],
      ]
  ]);
  
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

/////End Code\\\\

//// Buy \\\

if ($cdata2 == "buy") {
    $gatesText = "〄xᴏ 𝕩 ᴄᴄ ᴄʜᴋ〄
━━━━━━━━━━━━━━━━━━
      ᴘʀᴇᴍɪᴜᴍ ᴘʟᴀɴs
━━━━━━━━━━━━━━━━━━
- $4.99 for 7 Days
- $9.99 for 15 Days
- $14.99 for 28 Days
━━━━━━━━━━━━━━━━━━
• 𝙋𝘼𝙔𝙈𝙀𝙉𝙏 𝙈𝙀𝙏𝙃𝙊𝘿 •
𝘉𝘛𝘊 - 𝘓𝘛𝘊 - 𝘜𝘚𝘋𝘛 - 𝘛𝘙𝘟
━━━━━━━━━━━━━━━━━━
★ 𝘼𝙁𝙏𝙀𝙍 𝙋𝘼𝙔𝙈𝙀𝙉𝙏:
ᴄᴏɴғɪʀᴍ ᴘᴀʏᴍᴇɴᴛ ʙʏ ᴄᴏɴᴛᴀᴄᴛɪɴɢ @XOXEVILXD ᴡɪᴛʜ ʏᴏᴜʀ ᴛʀᴀɴsᴀᴄᴛɪᴏɴ ᴅᴇᴛᴀɪʟs. ᴡᴇ'ʟʟ ᴀᴄᴛɪᴠᴀᴛᴇ ʏᴏᴜʀ ᴘʀᴇᴍɪᴜᴍ ᴘʟᴀɴ ᴀs sᴏᴏɴ ᴀs ᴘᴏssɪʙʟᴇ.
ᴀʟʟ sᴀʟᴇs ᴀʀᴇ ғɪɴᴀʟ. ᴛʜᴇʀᴇ ᴀʀᴇ ɴᴏ ʀᴇғᴜɴᴅs ᴏʀ ʀᴇᴘʟᴀᴄᴇᴍᴇɴᴛs ғᴏʀ ᴘᴜʀᴄʜᴀsᴇs.

✫ ᴛʜᴀɴᴋ ʏᴏᴜ ғᴏʀ ᴄʜᴏᴏsɪɴɢ ᴛᴏ ɢᴏ ᴘʀᴇᴍɪᴜᴍ! ʏᴏᴜʀ sᴜᴘᴘᴏʀᴛ ʜᴇʟᴘs ᴜs ᴋᴇᴇᴘ ɪᴍᴘʀᴏᴠɪɴɢ ᴏᴜʀ sᴇʀᴠɪᴄᴇs ғᴏʀ ʏᴏᴜ.

⍟ 𝘛𝘏𝘐𝘚 𝘛𝘖𝘗-𝘜𝘗 𝘈𝘙𝘌 𝘕𝘖𝘕 𝘙𝘌𝘍𝘜𝘕𝘋𝘈𝘉𝘓𝘌 ⍟";


                                 $gatesKeyboard = json_encode([
                                 'inline_keyboard' => [
                                     [                     ['text' => '𝕮𝖔𝖒𝖋𝖎𝖗𝖒 𝕻𝖆𝖞𝖒𝖊𝖓𝖙', 'url' => 'https://t.me/xoxevilxd'],   ], ]
  ]);


    $videoUrl = https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//////// End\\\\\\\


//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "↯ GET ACCESS  ↯", 'url' => "t.me/xoxevilxd"],
        ],
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>𖤐 GATEWAYS 𖤐 

-----------------------------------
× CHARGE GATES : <code>20</code>
× AUTH GATES : <code>6</code>
× TOTAL : <code>26</code>
-----------------------------------

$bota</b>";

    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => "𝕬𝖚𝖙𝖍 𝕲𝖆𝖙𝖊𝖜𝖆𝖞'𝖘", 'callback_data' => 'premium'], ['text' => "𝕮𝖍𝖆𝖗𝖌𝖊 𝕲𝖆𝖙𝖊𝖜𝖆𝖞'𝖘", 'callback_data' => 'free']],
            [['text' => '𝕭𝖆𝖈𝖐', 'callback_data' => 'back2']]
        ]
    ]);
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);


    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}


//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>𖤐 GATEWAYS 𖤐 

- - - - - - - - - - - - 
× CHARGE GATEWAY : <code>20</code>
× AUTH GATEWAY : <code>6</code>
× TOTAL : <code>26</code>
- - - - - - - - - - - - 

$bota</b>";


                                 $gatesKeyboard = json_encode([
                                 'inline_keyboard' => [
                                     [['text' => "AUTH GATES", 'callback_data' => 'premium'], ['text' => "CHARGE GATES", 'callback_data' => 'free']],
                                     [['text' => '𝕭𝖆𝖈𝖐', 'callback_data' => 'back2']]
                                 ]
        
    ]);
  
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ BACK PAGE 𝟎", 'callback_data' => 'mm'], ['text' => "2 NEXT PAGE ⥭", 'callback_data' => 'freec']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "free") {
    $freeText = "PAGE NO. ↯ 𝟏
   
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - BRAINTREE $1 AVS</b>
<b>× USAGE - <code>/ba cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - PAYPAL 0.01$</b>
<b>× USAGE - <code>/pp cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - - 
<b>× GATEWAY - PayPal Mass</b>
<b>× USAGE - <code>/masspp cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE 12.48$</b>
<b>× USAGE - <code>/str cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE Mass</b>
<b>× USAGE - <code>/mstr cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - AUTHORIZE NET 25$</b>
<b>× USAGE - <code>/atf cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}

//////=====Second Page Of Charge=======\\\\\

$premiumcButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟏", 'callback_data' => 'free'], ['text' => "𝟑 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'freea']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freec") {
    $freeText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟐
   
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPIFY 10$</b>
<b>× USAGE - <code>/sh cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - - 
<b>× GATEWAY - SHOPIFY Mass </b>
<b>× USAGE - <code>/mass cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPIFY 12.99$</b>
<b>× USAGE - <code>/sf cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPIFY+SPREEDLY 6$</b>
<b>× USAGE - <code>/sd cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - AUTHORIZE NET 7$</b>
<b>× USAGE - <code>/asd cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumcButton));
}

/////=====END====\\\\


//////===== 3 PAGE OF CHARGE GATES ===\\\

$premiumaButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟐", 'callback_data' => 'freec'], ['text' => "𝟒 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'freeg']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freea") {
    $freeText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟑

- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPIFY+BRAINTREE 10$</b>
<b>× USAGE - <code>/sb cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPIFY 8.25$</b>
<b>× USAGE - <code>/si cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE 8.61$</b>
<b>× USAGE - <code>/sec cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPFIY + STRIPE 54$</b>
<b>× USAGE - <code>/sy cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumaButton));
}


///////======END======\\\\\\




////// PAGE 4 OF CHARGED GATE \\\\\

$premiumgButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟑", 'callback_data' => 'freea'], ['text' => "𝟓 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'freeh']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freeg") {
    $freeText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟒
    
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPFIY + PAYEEZY 17$</b>
<b>× USAGE - <code>/py cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPFIY + PAYEEZY 8$</b>
<b>× USAGE - <code>/px cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE 49$</b>
<b>× USAGE - <code>/dep cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SHOPFIY + STRIPE 10$</b>
<b>× USAGE - <code>/sc cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
}



////// END CODE \\\\\

////// Charge Gate Page 5 /\\\\\
$premiumgButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟒", 'callback_data' => 'freeg'], ['text' => "𝟓 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'mm']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freeh") {
    $freeText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟔
    
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE 5$</b>
<b>× USAGE - <code>/sr cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE 2$</b>
<b>× USAGE - <code>/sor cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - AUTHORIZE NET 200$</b>
<b>× USAGE - <code>/anh cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STIRPE 5.48$</b>
<b>× USAGE - <code>/stp cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
}

//// End Code \\\\

//========Premium and free=======//

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟎", 'callback_data' => 'premium'], ['text' => "𝟐 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'premiump']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premium") {
   $premiumText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟏
   
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - BRAINTREE 3D LookUp</b>
<b>× USAGE - <code>/vbv cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - BRAINTREE AUTH [V1]</b>
<b>× USAGE - <code>/brr cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>OFF ❌</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - BRAINTREE AUTH [V2]</b>
<b>× USAGE - <code>/sex cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}




//// Auth Page 2 \\\\

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝕭𝖆𝖈𝖐 𝕻𝖆𝖌𝖊 𝟐", 'callback_data' => 'premium'], ['text' => "𝟑 𝕹𝖊𝖝𝖙 𝕻𝖆𝖌𝖊 ⥭", 'callback_data' => 'mm']],
                                 [['text' => '𝕳𝖔𝖒𝖊', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premiump") {
   $premiumText = "𝕻𝖆𝖌𝖊 𝕹𝖔 ↯ 𝟐
   
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - STRIPE AUTH</b>
<b>× USAGE - <code>/ss cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - SQUARE AUTH</b>
<b>× USAGE - <code>/sq cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -
<b>× GATEWAY - AUTHORIZE NET 0$</b>
<b>× USAGE - <code>/auz cc|mm|yy|cvv</code></b>
<b>× RANK - <code>SPECIAL GRADE</code></b>
<b>× STATUS - <code>ON ✅</code></b>
- - - - - - - - - - - - - - - - - - -

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}



//////=====End====\\\

//=======Premium and free end=====//




//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝕲𝖆𝖙𝖊𝖜𝖆𝖞𝖘", 'callback_data' => 'gates'], 
                                          
                            
                            ['text' => "𝕭𝖆𝖈𝖐", 'callback_data' => 'back2']]
    ]
]);
   

if ($cdata2 == "herr") {

  $toolcmds = "<b>火 TOOL KIT 火</b>

- - - - - - - - - - - - - - - - - - -
<b>× USER INFO - <code>/id</code>
× USAGE - <code>/id</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× IP LOOKUP - <code>/ip</code>
× USAGE - <code>/ip 1.1.1.1</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× BIN LOOKUP - <code>/bin</code>
× USAGE - <code>/bin 509786</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× CC GENERATE- <code>/gen</code>
× USAGE - <code>/gen 509786XXX|XX|XX|XXX</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× CREADIT'S CHECK- <code>/credits</code>
× USAGE - <code>/credits check</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× FAKE ADDRESS - <code>/fake</code>
× USAGE - <code>/fake us</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -
× SK CHECKER - <code>/sk</code>
× USAGE - <code>/sk sk_live</code>
× STATUS - <code>ON ✅</code>

× CC KILLER 🥶- <code>/cckill</code>
× USAGE - <code>/cckill</code>
× STATUS - <code>ON ✅</code>
- - - - - - - - - - - - - - - - - - -</b>

<b>|×| DEV </b>- @xoxevilxd";

    // Change this to your video URL
     $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============TOOLS END============//

//=============PRICE===============//




//=============PRICE END============//







//========finalize end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "𝕮𝖍𝖆𝖓𝖓𝖊𝖑", 'url' => "t.me/cc_x_dark"], ['text' => "𝕲𝖗𝖔𝖚𝖕", 'url' => "t.me/cc_x_chat"]],
        [['text' => "𝕭𝖆𝖈𝖐 ", 'callback_data' => 'back2']]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "ᴊᴏɪɴ ᴛʜᴇ ɢɪᴠᴇɴ ᴄʜᴀɴɴᴇʟ ᴛᴏ ᴜsᴇ ᴍᴇ ғʀᴇᴇʟʏ ᴀɴᴅ ɢᴇᴛ ɪᴍᴘᴏʀᴛᴀɴᴛ ᴜᴘᴅᴀᴛᴇs ᴀʙᴏᴜᴛ ʙᴏᴛ!";

    // Change this to your video URL
    $videoUrl = "https://t.me/xoxscrap/5382";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("ᴡᴇʟᴄᴏᴍᴇ ʙᴀʙʏ🥵,ɪ ᴛʜɪɴᴋ ʏᴏᴜ ᴡᴀɴᴛ ᴛᴏ ᴄᴏᴛʀᴏʟ ᴍɪɴᴇ ᴡʜᴏʟᴇ ʙᴏᴅʏ🤤.

ᴛᴏ ɢᴇᴛ ᴍʏ ᴄᴏᴍᴘʟᴇᴛᴇ ᴀᴄᴇss ᴊᴜsᴛ ᴅᴍ ᴍɪɴᴇ ᴏᴡɴᴇʀ ʜᴇ'ʟʟ ʟᴇᴛ ʏᴏᴜ ᴛᴏ ᴜsᴇ ᴍᴇ ᴜᴛɪʟ ʜᴇ ᴡᴀɴᴛs ᴅᴍ @xoxevilxD");

    // Change this to your video url
    $backVideoUrl = "https://t.me/xoxscrap/5382"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => '𝕲𝖆𝖙𝖊𝖜𝖆𝖞𝖘', 'callback_data' => 'gates'],
                ['text' => '𝕿𝖔𝖔𝖑 𝕶𝖎𝖙', 'callback_data' => 'herr'],
            ],
            [
                ['text' => '𝕸𝖞 𝖂𝖔𝖗𝖑𝖉', 'callback_data' => 'channel'],
            ],
        ]
    ]);

    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";

    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
  file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);

};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{

$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);

}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

