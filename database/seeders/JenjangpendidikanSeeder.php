<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JenjangpendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenjang_pendidikan.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('jenjangpendidikans')->insert([
                'id' => $obj->jenjang_pendidikan_id,
                'title' => $obj->nama,
                'slug' => Str::slug($obj->nama),
                'created_at'             => $obj->create_date,
                'updated_at'             => $obj->last_update,
            ]);
        }
    }
}
