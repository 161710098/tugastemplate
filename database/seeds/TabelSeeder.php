<?php

use Illuminate\Database\Seeder;

class TabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u=[
        	['NIS'=>'1212111','nama'=>'David','tempat_lahir'=>'Situ Tarate','tanggal_lahir'=>'2002-03-14','alamat'=>'Cibaduyut','citacita'=>'Wartawan','hobi'=>'Edit Foto','gambar'=>'s1.jpg']];
        DB::table('siswas')->insert($u);
    }
}
