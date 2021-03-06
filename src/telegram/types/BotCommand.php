<?php

namespace skrtdev\Telegram;

use \stdClass;

/**
 * This object represents a bot command.
*/
class BotCommand extends \Telegram\BotCommand{

   /** @var string Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores. */
   public string $command;

   /** @var string Description of the command, 3-256 characters. */
   public string $description;


}

?>
