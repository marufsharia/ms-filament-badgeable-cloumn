<?php

namespace MarufSharia\MSFilamentBadgeableColumn\Components;

use MarufSharia\MSFilamentBadgeableColumn\Concerns\HasBadges;
use Filament\Tables\Columns\TextColumn;

class BadgeableColumn extends TextColumn
{
    use HasBadges;
}
