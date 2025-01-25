<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Ashgabat' => [
                'Parahat 1',
                'Parahat 2',
                'Parahat 3',
                'Parahat 4',
                'Parahat 5',
                'Parahat 6',
                'Parahat 7',
                'Parahat 8',
                '1-nji mikroraýon',
                '2-nji mikroraýon',
                '3-nji mikroraýon',
                '4-nji mikroraýon',
                '5-nji mikroraýon',
                '6-njy mikroraýon',
                '7-nji mikroraýon',
                '8-nji mikroraýon',
                '9-njy mikroraýon',
                '10-njy mikroraýon',
                '11-nji mikroraýon',
                '30-njy mikroraýon',
                'Dossaf',
                'Howdan "А"',
                'Howdan "B"',
                'Howdan "W"',
                'Köşi',
                'Çogonly',
                'Berzeňňi köçe',
                'Büzmeýin',
                'Bitarap şayoly',
                '13-nji Tapgyr',
                '14-nji Tapgyr',
                '15-nji Tapgyr',
                '16-nji Tapgyr',
                'Olimpiya şäherçesi',
                'Änew',
                'Herrikgala',
                'Garadamak',
                'Ýanbaş',
                'Gurtly',
                'Gämi',
                'Bagyr',
                'Hitrowka',
                '40 Ýylyk',
                'Gurban Soltan Eje şaýoly',
                'Arçabil şaýoly',
                'Magtymguly köçe',
                '10 ýyl Abadançylyk şaýoly',
                'Atatürk köçe',
                'Hudaýberdyýew köçe',
                'Çehow köçe',
                'Kemine köçe',
                'Kuliýew köçe',
                'Berkrewe',
                'Arzuw',
                'Bedew',
            ],
            'Mary' => [
                'Bayramaly',
                'Sakarchage',
                'Murgap',
                'Serhetabat',
                'Tagtabazar',
                'Yoloten',
                'Altyn Asyr',
            ],
            'Lebap' => [
                'Turkmenabat',
                'Farap',
                'Sayat',
                'Hojambaz',
                'Kerki',
                'Charjou',
                'Dovletli',
                'Atamyrat',
            ],
            'Balkan' => [
                'Balkanabat',
                'Turkmenbashi',
                'Hazar',
                'Esenguly',
                'Bereket',
                'Serdar',
                'Garabogaz',
            ],
            'Dashoguz' => [
                'Dashoguz',
                'Gubadag',
                'Koneurgench',
                'Birinji May',
                'Boldumsaz',
                'Ruhubelent',
                'S.A. Niyazov',
                'Gurbansoltan Eje',
            ],
            'Ahal' => [
                'Anau',
                'Babadayhan',
                'Baherden',
                'Gokdepe',
                'Sarahs',
                'Tejen',
                'Kaka',
                'Abadan',
            ],
        ];

        foreach ($objs as $stateName => $districts) {
            $state = Location::create([
                'name' => $stateName,
                'parent_id' => null,
            ]);

            foreach ($districts as $districtName) {
                Location::create([
                    'name' => $districtName,
                    'parent_id' => $state->id,
                ]);
            }
        }
    }
}
