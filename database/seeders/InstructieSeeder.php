<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstructieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie' => 'Snipper het uitje en fruit even aan in een scheutje olijfolie. Voeg de blokjes kip toe en bak ongeveer 5 minuten. Kook ondertussen de pasta gaar. Voeg de (zelfgemaakte) pesto en room toe aan de kip en roer goed door. Proef nog even of er nog peper of zout bij moet.',
            'stap' => 1,
            'gerecht_ID' => 1,
        ]);
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie' => 'Laat de pestosaus een paar minuutjes zachtjes pruttelen. Voeg dan de gekookte pasta toe en schep er doorheen. Halveer de tomaatjes en roer ook door de pasta pesto en verwarm nog een minuutje mee. Serveer de pasta pesto in de pan of op een bord met een handje rucola en de geroosterde pijnboompitten.',
            'stap' => 2,
            'gerecht_ID' => 1,
        ]);
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie' => 'Tip: deze pasta pesto is ook lekker met geraspte kaas. Gebruik ook eens stukjes vegetarische kip voor een vegetarische variant op de kip pesto.',
            'stap' => 3,
            'gerecht_ID' => 1,
        ]);
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie'=> 'Doe alle ingrediënten voor de marinade in een kom, meng goed en leg de biefstuk erin. Laat minstens 2 uur marineren in de koelkast. Draai de biefstuk regelmatig om.',
            'stap' => 1,
            'gerecht_ID' => 2,
        ]);
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie'=> 'Verhit de barbecue. Haal de biefstuk uit de marinade. Smeer de rooster in met een klein beetje olie en leg de biefstuk op het heetste deel van de rooster. Rooster 2-3 minuten aan elke kant. Schuif dan de biefstuk naar een koeler deel van de barbecue en laat enkele minuten verdergaren. Haal het vlees van de rooster en laat 5 minuten rusten.',
            'stap' => 2,
            'gerecht_ID' => 2,
        ]);
        \DB::table('instructie_gerecht')->insert([
            'beschrijving_instructie'=> 'verwarm de tortillas. Snij de biefstuk in plakken en schik op de tortillas. Voeg de tomaat, avocado, lente-ui en zure room toe. Vouw dubbel en serveer meteen.',
            'stap' => 3,
            'gerecht_ID' => 2,
        ]);
    } 
}
