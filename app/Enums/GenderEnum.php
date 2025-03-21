<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum GenderEnum: string implements HasLabel
{
    use EnumToArray;

    case Masculine = 'M';
    case Feminine = 'F';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Masculine => 'Masculino',
            self::Feminine => 'Feminino',
        };
    }
}
