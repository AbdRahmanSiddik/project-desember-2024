<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin\Kategori;
use App\Models\admin\Profile;
use App\Models\Teller\Pegadaian;
use App\Models\Teller\Pinjaman;
use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Profile::factory(2)->create();

        Kategori::create([
            'token_kategori' => Str::random(32),
            'nama_kategori' => 'Mudarabah',
            'biaya' => 0.5,
            'deskripsi' => fake()->paragraph(mt_rand(2,3))
        ]);

        Kategori::create([
            'token_kategori' => Str::random(32),
            'nama_kategori' => 'pendidikan',
            'biaya' => 0.3,
            'deskripsi' => fake()->paragraph(mt_rand(2,3))
        ]);

        Kategori::create([
            'token_kategori' => Str::random(32),
            'nama_kategori' => 'Umum',
            'biaya' => 0.03,
            'deskripsi' => fake()->paragraph(mt_rand(2,3))
        ]);

        User::factory(15)->create();
        // Rekening::factory()->create();
        // Tabungan::factory(20)->create();
        $anggota = User::where('role', 'anggota')->get();
        $teller = User::where('role', 'teller')->get();
        foreach ($anggota as $item) {
            foreach($teller as $key){
                if($item->profile_id == $key->profile_id){
                    Rekening::create([
                        'token_rekening' => Str::random(32),
                        'no_rekening' => mt_rand(100000000000000, 999999999999999),
                        'anggota' => $item->id,
                        'nama_rekening' => fake()->name(),
                        'kategori_id' => mt_rand(1, 3),
                        'ktp' => fake()->nik(),
                        'foto_ktp' => fake()->randomElement(['ktp.png', 'ktp.jpg']),
                        'deskripsi' => fake()->paragraph(3),
                        'teller' => $key->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    break;
                }
            }
        }

        Tabungan::factory(20)->create();
        Pinjaman::factory(4)->create();
        Pegadaian::factory(4)->create();
    }
}