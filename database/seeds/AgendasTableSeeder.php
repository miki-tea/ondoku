<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AgendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(range(1,3) as $num) {
            DB::table('agendas') -> insert([
                'user_id' => 1,
                'group_id' => 1,
                'title' => "議題 {$num}",
                'body' => "議題本文議題本文議題本文議題本文議題本文",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
