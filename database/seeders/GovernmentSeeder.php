<?php

namespace Database\Seeders;

use App\Models\Government;
use Illuminate\Database\Seeder;

class GovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Government::create([
            'name' => 'Admin Sistem',
            'address' => ' Sistem Informasi Terkait',
        ]);
        Government::create([
            'name' => 'Dinas Pendidikan dan Kebudayaan',
            'address' => ' Jl. Slamet Riyadi',
        ]);
        Government::create([
            'name' => 'Dinas Kesehatan',
            'address' => ' Jl. Jendral Sudirman No.417',
        ]);
        Government::create([
            'name' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
            'address' => ' Jl. Jendral Sudirman No.272',
        ]);
        Government::create([
            'name' => 'Dinas Perumahan Rakyat dan Kawasan Permukiman',
            'address' => ' Jl. Dr. Soetomo No. 18 Batang',
        ]);
        Government::create([
            'name' => 'Dinas Sosial',
            'address' => ' JL. Letjend.R.Suprapto, No. 04',
        ]);
        Government::create([
            'name' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
            'address' => ' Jl. Urip Sumoharjo No. 13 Batang 51212',
        ]);
        Government::create([
            'name' => 'Dinas Perhubungan',
            'address' => ' Jl. Raya Kandeman KM 05 Batang 51261',
        ]);
    }
}
