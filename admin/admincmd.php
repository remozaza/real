<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  $owners = file_get_contents('Database/owner.txt');
  $admins = explode("\n", $owners);
  if (!in_array($userId, $admins)) {
      sendMessage($chatId,"ɴɪɢɢᴀ ʏᴏᴜ ᴀʀᴇ ɴᴏᴛ ᴍʏ ᴏᴡɴᴇʀ💔",$messageId);
  } else
  {
  sendMessage($chatId,urlencode(
    "<b>
Admin commands here

Code generate: /code day-amount
Usage: <code>/code 1-1</code>

Delete expired: /remexp
Usage: <code>/remexp</code>

Soon adding more...

</b>"),$messageId);
  }
}

?>
