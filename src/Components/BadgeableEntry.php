<?php

namespace MarufSharia\MSFilamentBadgeableColumn\Components;

use MarufSharia\MSFilamentBadgeableColumn\Concerns\HasBadges;
use Filament\Infolists\Components\TextEntry;

class BadgeableEntry extends TextEntry
{
    use HasBadges;
}
