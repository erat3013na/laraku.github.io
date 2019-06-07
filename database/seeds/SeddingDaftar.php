<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Daftar;
use App\NilaiPeserta;
use App\Pembimbing;

class SeddingDaftar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $daftar = new Daftar;
        $nilaipes = new NilaiPeserta;

        for ($i = 1; $i <= 200; $i++)
        {
            $daftar = new Daftar();
            $nilaipes = new NilaiPeserta();
            $pemb = new Pembimbing();

            $daftar->tim = 'Nama Tim '.$i;
            $daftar->anggota1 = $faker->name;
            $daftar->kelas1 = $faker->randomElement(['VII', 'VIII', 'IX']);
            $daftar->nisn1 = '09807392';
            $daftar->anggota2 = $faker->name;
            $daftar->kelas2 = $faker->randomElement(['VII', 'VIII', 'IX']);
            $daftar->nisn2 = '09839720';
            $daftar->anggota3 = $faker->name;
            $daftar->kelas3 = $faker->randomElement(['VII', 'VIII', 'IX']);
            $daftar->nisn3 = '09873920';
            $daftar->save();

            $nilaipes->NilaiTes1 = $faker->numberBetween($min = 50, $max = 85 );
            $nilaipes->NilaiTes2 = $faker->numberBetween($min = 50, $max = 85 );
            $nilaipes->NilaiTes3 = $faker->numberBetween($min = 50, $max = 85 );
            $nilaipes->save();

            if ($i <= 50)
            {
                $pemb->daftar_kelas = $faker->randomElement(['VII', 'VIII', 'IX']);
                $pemb->namaPembimbing = $faker->name;
                $pemb->save();
            }
        }
    }
}
