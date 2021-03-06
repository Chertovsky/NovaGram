<?php

namespace skrtdev\Telegram;

use \stdClass;

/**
 * This object represents a point on the map.
*/
class Location extends \Telegram\Location{

   /** @var float Longitude as defined by sender */
   public float $longitude;

   /** @var float Latitude as defined by sender */
   public float $latitude;


}

?>
