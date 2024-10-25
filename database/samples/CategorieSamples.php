<?php

namespace Database\Samples;

use Illuminate\Support\Collection;

class CategorieSamples
{
    /**
     * Get samples as Collection.
     */
    public function collect(): Collection
    {
        return collect(self::data());
    }

    /**
     * Some random beats.
     */
    static function data(): array
    {
        return [
            // ['categorie' => ''],
            ['categorie' => 'Soul'],
            ['categorie' => 'Ambient'],
            ['categorie' => 'Pop'],
            ['categorie' => 'Rap'],
            ['categorie' => 'Funk'],
            ['categorie' => 'Rock'],
            ['categorie' => 'Reggae / Dub'],
            ['categorie' => 'Techno'],
            ['categorie' => 'Electro']
        ];
    }
}