<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FaitSeeder extends Seeder
{
    /**
     * Exécuter le seeder.
     *
     * @return void
     */
    public function run()
    {
        // Chemin vers le fichier JSON
        $cheminJson = database_path('seeders/cat-facts.json');

        // Lire le fichier JSON
        $json = File::get($cheminJson);

        // Décoder le JSON en tableau PHP
        $data = json_decode($json, true);

        // Vérifier s'il y a une erreur de décodage
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Erreur de décodage JSON: ' . json_last_error_msg());
        }

        // Insérer les données dans la table faits
        foreach ($data as $item) {
            DB::table('faits')->insert([
                'fait' => $item['fact'],
                'longueur' => $item['length'],
            ]);
        }
    }
}
