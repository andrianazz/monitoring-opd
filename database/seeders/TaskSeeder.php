<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'name' => 'Penyusunan Dokumen Perencanaan Perangkat Daerah',
            'total' => 738000,
            'government_id' => 3,
        ]);

        Task::create([
            'name' => 'Penyediaan Peralatan dan Perlengkapan Kantor',
            'total' => 0,
            'government_id' => 3,
        ]);

        Task::create([
            'name' => 'Evaluasi Kinerja Perangkat Daerah',
            'total' => 0,
            'government_id' => 3,
        ]);

        Task::create([
            'name' => 'Evaluasi Kinerja Perangkat Daerah',
            'total' => 0,
            'government_id' => 3,
        ]);

        Task::create([
            'name' => 'Penyedia Jasa Surat Menyurat',
            'total' => 0,
            'government_id' => 3,
        ]);
    }
}
