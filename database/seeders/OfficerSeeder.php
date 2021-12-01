<?php

namespace Database\Seeders;

use App\Models\Officer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Officer::create([
            'name' => 'Andrian Wahyu',
            'user_id' => 'andrianazz',
            'email' => 'andrianwahyu@gmail.com',
            'phone' => '081276836919',
            'nip' => '11850112219',
            'gender' => 'Pria',
            'password' => Hash::make('admin'),
            'image' => 'images/user/img.jpg',
            'address' => 'Jl. Nelayan',
            'government_id' => 1,
        ]);

        Officer::create([
            'name' => 'Muhammad Rakha',
            'user_id' => 'mrakha1',
            'email' => 'mrakha1@gmail.com',
            'nip' => '118501138972',
            'phone' => '081287367821',
            'gender' => 'Pria',
            'password' => Hash::make('mrakha1'),
            'image' => 'images/user/user.png',
            'address' => 'Jl. Manunggal No. 230',
            'government_id' => 3,
        ]);

        Officer::create([
            'name' => 'Muhammad Ridha',
            'user_id' => 'mridha1',
            'email' => 'mridha1@gmail.com',
            'phone' => '081287361234',
            'nip' => '11850112219',
            'gender' => 'Pria',
            'password' => Hash::make('mridha1'),
            'image' => 'images/user/user.png',
            'address' => 'Jl. Manunggal No. 230',
            'government_id' => 2,
        ]);

        Officer::create([
            'name' => 'Dea Ananda',
            'user_id' => 'dea1',
            'email' => 'dea1@gmail.com',
            'phone' => '081287367689',
            'nip' => '11850112219',
            'gender' => 'Wanita',
            'password' => Hash::make('dea1'),
            'image' => 'images/user/user.png',
            'address' => 'Jl. Taman Karya No. 10',
            'government_id' => 4,
        ]);

        Officer::create([
            'name' => 'Wirasatria Putra',
            'user_id' => 'wira1',
            'email' => 'wira1@gmail.com',
            'phone' => '087639917632',
            'nip' => '11850118764',
            'gender' => 'Pria',
            'password' => Hash::make('wira1'),
            'image' => 'images/user/user.png',
            'address' => 'Jl. Melati No. 14',
            'government_id' => 2,
        ]);

        //
    }
}
