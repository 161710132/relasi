<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(seedrelasi::class);

        $this->call('seedrelasi');

        //informasi pengiriman seeder
        $this->command->info('seeder mahasiswa telah berhasil');
    }
}
