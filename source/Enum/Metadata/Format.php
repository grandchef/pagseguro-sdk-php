<?php

namespace PagSeguro\Enum\Metadata;

use PagSeguro\Enum\Enum;

/** Class Format
 *
 * Describes each format expected by each parameter of the metadata
 */
class Format extends Enum
{
    const PASSENGER_CPF = '[0-9]{11}';

    const PASSENGER_PASSPORT = '.+';

    const ORIGIN_CITY = '.+';

    const DESTINATION_CITY = '.+';

    const ORIGIN_AIRPORT_CODE = '.+';

    const DESTINATION_AIRPORT_CODE = '.+';

    const GAME_NAME = '.+';

    const PLAYER_ID = '.+';

    const TIME_IN_GAME_DAYS = '[0-9]+';

    const MOBILE_NUMBER = '([0-9]{2})?([0-9]{2})([0-9]{4,5}[0-9]{4})';

    const PASSENGER_NAME = '.+';
}
