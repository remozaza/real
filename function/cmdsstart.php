<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('log_errors', TRUE);
ini_set('error_log', 'errors.log');


$users = file_get_contents('Database/free.txt');
$freeusers = explode("\n", $users);

$videoURLStart = "https://t.me/xoxscrap/5382";


if (preg_match('/^(\/start|\.start|!start)/', $text)) {
    if (in_array($userId, $freeusers)) {
        $caption = "𖤐  ᴡᴇʟᴄᴏᴍᴇ ᴛᴏ xᴏ 𝕩  ᴄᴄ ᴄʜᴋ ʙᴏᴛ 𖤐 <code>@$username</code> <code>$rank</code>  ᴛᴏ ᴋɴᴏᴡ ᴍʏ ᴅɪғғᴇʀᴇɴᴛ ᴄᴏᴍᴍᴀɴᴅs ᴜsᴇ ᴛʜᴇ ʙᴜᴛᴛᴏɴs sʜᴏᴡɴ ʜᴇʀᴇ:
━━━━━━━━━━━━━━━━━━━
★ʙᴏᴛ ᴏᴡɴᴇʀ:- @xoxevilxD 
★ᴜɪ ʙʏ:- ᴏᴡɴᴇʀ
@$username
ᴊᴜsᴛ ᴄʟɪᴄᴋ '/cmds' ᴛᴏ ᴋɴᴏᴡ ᴍʏ ᴘᴏᴡᴇʀ
━━━━━━━━━━━━━━━━━━━
★ɢᴀᴛᴇᴡᴀʏs, ᴛᴏᴏʟs ᴀɴᴅ ғᴜɴᴄᴛɪᴏɴs ᴀʀᴇ ᴄᴏɴsᴛᴀɴᴛʟʏ ʙᴇɪɴɢ ᴀᴅᴅᴇᴅ ᴛᴏ ᴛʜɪs ʙᴏᴛ sᴏ ᴊᴏɪɴ ᴜᴘᴅᴀᴛᴇ ᴄʜᴀɴɴᴇʟ ᴛᴏ ɢᴇᴛ ɪɴғᴏʀᴍᴀᴛɪᴏɴs
⋙ ═══════ ⋆★⋆ ═══════ ⋘";
        sendVideox($chatId, $videoURLStart, $caption, $keyboard);
    } else {
        reply_tox($chatId,$message_id,$keyboard,"<code>You are not registered, Register first with</code> '/register' <code>to use me</code>");
    }
}
//=========START END========//
if (preg_match('/^(\/cmds|\.cmds|!cmds)/', $text)) {

    $videoUrl = "https://t.me/xoxscrap/5382"; 

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

    $caption = "ᴡᴇʟᴄᴏᴍᴇ ʙᴀʙʏ🥵,ɪ ᴛʜɪɴᴋ ʏᴏᴜ ᴡᴀɴᴛ ᴛᴏ ᴄᴏᴛʀᴏʟ ᴍɪɴᴇ ᴡʜᴏʟᴇ ʙᴏᴅʏ🤤.

ᴛᴏ ɢᴇᴛ ᴍʏ ᴄᴏᴍᴘʟᴇᴛᴇ ᴀᴄᴇss ᴊᴜsᴛ ᴅᴍ ᴍɪɴᴇ ᴏᴡɴᴇʀ ʜᴇ'ʟʟ ʟᴇᴛ ʏᴏᴜ ᴛᴏ ᴜsᴇ ᴍᴇ ᴜᴛɪʟ ʜᴇ ᴡᴀɴᴛs ᴅᴍ @xoxevilxD";
    file_get_contents("https://api.telegram.org/bot6881971010:AAGREmUTJWq15vRLQjBw-SO6ZWfwB0KLpEM/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}

// Price \\\

if (preg_match('/^(\/buy|\.buy|!buy)/', $text))

{

    $videoUrl = "https://t.me/xoxscrap/5382"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                      
                                 ['text' => '𝕮𝖔𝖒𝖋𝖎𝖗𝖒 𝕻𝖆𝖞𝖒𝖊𝖓𝖙', 'url' => 'https://t.me/xoxevilxd'],   ], ]
    ]);

    $caption = "〄 xᴏ 𝕩 ᴄᴄ ᴄʜᴋ 〄
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
  

file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}
