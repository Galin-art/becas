<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class todoUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $useradmin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'tipo'=>'1',
            'region_id'=>'200',
            'password'=>Hash::make('admin'),


        ]);

        $useradmin=User::create([
            'name'=>'CIUDAD IXTEPEC',
            'email'=>'ixtepec@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20001',
            'password'=>Hash::make('ixtepec'),


        ]);

        $useradmin=User::create([
            'name'=>'HEROICA CIUDAD DE HUAJUAPAN DE LEON',
            'email'=>'huajuapan@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20002',
            'password'=>Hash::make('huajuapn'),


        ]);

        $useradmin=User::create([
            'name'=>'HEROICA CIUDAD DE JUCHITAN DE ZARAGOZA',
            'email'=>'juchitan@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20003',
            'password'=>Hash::make('juchitan'),


        ]);

        $useradmin=User::create([
            'name'=>'HEROICA CIUDAD DE TLAXIACO',
            'email'=>'tlaxiaco@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20004',
            'password'=>Hash::make('tlaxiaco'),


        ]);

        $useradmin=User::create([
            'name'=>'HUAUTLA DE JIMENEZ',
            'email'=>'huautla@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20005',
            'password'=>Hash::make(' '),


        ]);
        $useradmin=User::create([
            'name'=>'IXTLAN DE JUAREZ',
            'email'=>'ixtlan@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20006',
            'password'=>Hash::make('ixtlan'),


        ]);


        $useradmin=User::create([
            'name'=>'MIAHUATLAN DE PORFIRIO DIAZ',
            'email'=>'muahuatlan@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20007',
            'password'=>Hash::make('muahuatlan'),


        ]);


        $useradmin=User::create([
            'name'=>'OAXACA DE JUAREZ',
            'email'=>'oaxaca@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20008',
            'password'=>Hash::make('oaxaca'),


        ]);


        $useradmin=User::create([
            'name'=>'SALINA CRUZ',
            'email'=>'salinaCruz@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20009',
            'password'=>Hash::make('salinaCruz'),


        ]);

        $useradmin=User::create([
            'name'=>'SAN JUAN BAUTISTA TUXTEPEC',
            'email'=>'tuxtepec@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20010',
            'password'=>Hash::make('tuxtepec'),


        ]);


        $useradmin=User::create([
            'name'=>'SAN PEDRO MIXTEPEC',
            'email'=>'sanpedromixtepec@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20011',
            'password'=>Hash::make('sanpedromixtepec'),


        ]);


        $useradmin=User::create([
            'name'=>'SANTIAGO PINOTEPA NACIONAL',
            'email'=>'pinotepa@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20012',
            'password'=>Hash::make('pinotepa'),


        ]);


        $useradmin=User::create([
            'name'=>'SANTO DOMINGO TEHUANTEPEC',
            'email'=>'tehuante@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20013',
            'password'=>Hash::make('tehuante'),


        ]);

        $useradmin=User::create([
            'name'=>'TEOTITLAN DE FLORES MAGON',
            'email'=>'teotitlan@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20014',
            'password'=>Hash::make('teotitlan'),


        ]);


        $useradmin=User::create([
            'name'=>'TLACOLULA DE MATAMOROS',
            'email'=>'tlacolula@gmail.com',
            'tipo'=>'0',
            'region_id'=>'20015',
            'password'=>Hash::make('tlacolula'),


        ]);





    }
}
