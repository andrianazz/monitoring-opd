<?php

namespace Database\Seeders;

use App\Models\Subtask;
use Illuminate\Database\Seeder;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Subtask::create([
            'name' => 'Belanja Alat Bahan untuk Kegiatan Kantor-Alat Tulis Kantor',
            'pagu' => 618000,
            'date' => '2021-11-14',
            'task_id' => 1,
        ]);

        Subtask::create([
            'name' => 'Belanja Perjalanan Dinas Biasa',
            'pagu' => 120000,
            'date' => '2021-11-14',
            'task_id' => 1,
        ]);
    }
}
