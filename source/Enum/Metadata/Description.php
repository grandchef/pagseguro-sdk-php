<?php

namespace PagSeguro\Enum\Metadata;

use PagSeguro\Enum\Enum;

/** Class Description
 */
class Description extends Enum
{
    const PASSENGER_CPF = 'CPF do passageiro';

    const PASSENGER_PASSPORT = 'Passaporte do passageiro';

    const ORIGIN_CITY = 'Cidade de origem';

    const DESTINATION_CITY = 'Cidade de destino';

    const ORIGIN_AIRPORT_CODE = 'Código do aeroporto de origem';

    const DESTINATION_AIRPORT_CODE = 'Código do aeroporto de destino';

    const GAME_NAME = 'Nome do jogo';

    const PLAYER_ID = 'ID do jogador';

    const TIME_IN_GAME_DAYS = 'Tempo no jogo em dias';

    const MOBILE_NUMBER = 'Celular de recarga';

    const PASSENGER_NAME = 'Nome do passageiro';
}
