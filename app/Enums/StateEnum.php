<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum StateEnum: string implements HasLabel
{
    use EnumToArray;

    case AC = 'AC';

    case AL = 'AL';

    case AM = 'AM';

    case AP = 'AP';

    case BA = 'BA';

    case CE = 'CE';

    case DF = 'DF';

    case ES = 'ES';

    case GO = 'GO';

    case MA = 'MA';

    case MG = 'MG';

    case MS = 'MS';

    case MT = 'MT';

    case PA = 'PA';

    case PB = 'PB';

    case PE = 'PE';

    case PI = 'PI';

    case PR = 'PR';

    case RJ = 'RJ';

    case RN = 'RN';

    case RO = 'RO';

    case RR = 'RR';

    case RS = 'RS';

    case SC = 'SC';

    case SE = 'SE';

    case SP = 'SP';

    case TO = 'TO';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::AC => 'ACRE',
            self::AL => 'ALAGOAS',
            self::AM => 'AMAZONAS',
            self::AP => 'AMAPÁ',
            self::BA => 'BAHIA',
            self::CE => 'CEARÁ',
            self::DF => 'DISTRITO FEDERAL',
            self::ES => 'ESPÍRITO SANTO',
            self::GO => 'GOIÁS',
            self::MA => 'MARANHÃO',
            self::MG => 'MINAS GERAIS',
            self::MS => 'MATO GROSSO DO SUL',
            self::MT => 'MATO GROSSO',
            self::PA => 'PARÁ',
            self::PB => 'PARAÍBA',
            self::PE => 'PERNAMBUCO',
            self::PI => 'PIAUÍ',
            self::PR => 'PARANÁ',
            self::RJ => 'RIO DE JANEIRO',
            self::RN => 'RIO GRANDE DO NORTE',
            self::RO => 'RONDÔNIA',
            self::RR => 'RORAIMA',
            self::RS => 'RIO GRANDE DO SUL',
            self::SC => 'SANTA CATARINA',
            self::SE => 'SERGIPE',
            self::SP => 'SÃO PAULO',
            self::TO => 'TOCANTINS',
        };
    }
}
