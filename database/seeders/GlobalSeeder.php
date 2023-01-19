<?php

namespace Database\Seeders;

use App\Models\Block1;
use App\Models\Block2;
use App\Models\Tarifs;
use App\Models\Contact;
use App\Models\Investisseurs;
use App\Models\Avertissement;
use App\Models\Conditions;
use App\Models\Videos;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GlobalSeeder extends Seeder
{

    public function run()
    {
        // Block1::firstOrCreate(
        //     ['section' => 'LIBERTÉ FINANCIÈRE'],
        //     ['id' => '1', 'titre' => 'LIBERTÉ FINANCIÈRE',  'contenu' => 'Afin d\'obtenir la liberté financière, il faut prendre la décision de changer votre état d\'esprit. Une éducation et une discipline sont la base de tout succès. Faites le choix d\'investir dans des actifs pour en générer des revenus passifs. Dès cette décision prise, vous serez proche de la liberté financière et donc être LIBRE!', 'image' => 'uploads/a9702f13c3364137dcf86655bf9701d2.jpg', 'lien' => 'http://cscdsfvd.com', 'section' => 'Changer votre état d\'esprit']
        // );

        // Block2::firstOrCreate(
        //     ['id' => '4'],
        //     ['id' => '4', 'titre' => 'Rendement',  'contenu' => 'Nos différentes solutions d\'investissements ont un rendement de minimun 10%/mois. Chaque solution est étudié, analysé par nos experts afin de vous assurer un rendement assuré et sécurisé.', 'lien' => 'http://gfdsfsdf.com']
        // );

    }
}
