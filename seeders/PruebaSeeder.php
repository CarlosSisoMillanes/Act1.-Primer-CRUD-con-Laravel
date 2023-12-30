<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = ['Aggron', 'Vaporeon', 'Scizor', 'Snorlax', 'Lucario', 'Staraptor', 'Crobat', 'Garchomp', 'Tyranitar', 'Gengar', 'Charizard', 'Ampharos', 'Alakazam', 'Lapras', 'Salamence', 'Gardevoir', 'Umbreon', 'Venusaur'];
        $tipos = ['acero', 'agua', 'bicho', 'normal', 'lucha', 'volador', 'veneno', 'tierra', 'roca', 'fantasma', 'fuego', 'electrico', 'psiquico', 'hielo', 'dragon', 'hada', 'siniestro', 'planta'];
        $tamaños = ['pequeño', 'mediano', 'grande'];
        for($i =0; $i<=10; $i++)
        {
            DB::table('pokemons')->insert([
                'nombre' => $nombres[array_rand($nombres)],
                'tipo' => $tipos[array_rand($tipos)],
                'tamaño' => $tamaños[array_rand($tamaños)],
                'peso' => mt_rand(100, 10000) / 10,
            ]);
        }
    }
}
