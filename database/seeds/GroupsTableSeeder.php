<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $groups =[
            '井口治作品を読む会' => '新進気鋭のノンフィクション作家・井口治作品を皆で読んで語りましょう',
            '2000年代直木賞受賞作家を読む' => '読んだことのある人も、これから読む人も歓迎です。',
            '青空文庫愛好会' => '近代文学の宝庫、青空文庫。みんなでおすすめを教え合いましょう！'
        ];

        foreach($groups as $key => $value){
            DB::table('groups')->insert([
                'name' => $key,
                'description' => $value,
                'user_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
