<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            ['team_id' => 'TEAM1', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM2', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM3', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM4', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM5', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM6', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM7', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM8', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM9', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM10', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM11', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM12', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM13', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM14', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM15', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM16', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM17', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM18', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM19', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM20', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM21', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM22', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM23', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM24', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM25', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM26', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM27', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM28', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM29', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM30', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM31', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM32', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM33', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM34', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM35', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM36', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM37', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM38', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM39', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM40', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM41', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM42', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM43', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM44', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM45', 'password' => Hash::make('CiPhErTrX')],
            ['team_id' => 'TEAM46', 'password' => Hash::make('ScAvEnGeX')],
            ['team_id' => 'TEAM47', 'password' => Hash::make('DeCrYpTiX')],
            ['team_id' => 'TEAM48', 'password' => Hash::make('HiDdEnClU')],
            ['team_id' => 'TEAM49', 'password' => Hash::make('UnLoCkMaP')],
            ['team_id' => 'TEAM50', 'password' => Hash::make('CiPhErTrX')],
        ]);
    }
}

// php artisan db:seed --class=TeamSeeder
// php artisan migrate:refresh --seed


