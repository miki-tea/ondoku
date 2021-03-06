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
            '青空文庫愛好会' => '近代文学の宝庫、青空文庫。みんなでおすすめを教え合いましょう！',
            '雨にまつわる小説' => '雨にまつわる小説について語りましょう！',
            '雪が印象的な小説' => 'あなたにとって雪の小説といえば、何ですか？',
            '自由な解釈で☆人間失格' => '人間失格！語られ尽くした名作を、あえて語ろう！',
            'チェコ出身作家の小説を読む会' => '日本ではあまり馴染みのない国ですが、素敵な小説がたくさんあります。おすすめを出し合って、みんなで読みましょう。',
            '海外ベストセラーの小説について語る' => '日本のベストセラーは自然と見聞きするけど、海外のベストセラーは・・・。まだ出会っていない運命の本に出会えるかも。',
            'ラノベ愛好会' => 'ラノベは読みやすいし面白い！',
            '太宰治フォロワー' => 'こちら太宰治の小説全般を読み、語る会です。太宰が苦手な方・拒否反応を起こす方閲覧ご遠慮ください',
            '池井戸潤を読む会' => 'ベストセラーをたくさん生み出してきた名作家。新作から旧作まで、幅広く語りましょう。',
            '愛煙家愛好会' => 'タバコってカッコよくない？',
            '技術書を読む会' => '技術書、主にパソコンのです。',
            '川端康成と芥川龍之介' => '犬猿の仲！',
            '現代詩人の会' => '現代、詩の表現は様々です。一度覗いてみては？',
            '谷川純一郎の本を読む会' => '好きな方、ご参加どうぞ。緩くやってます。',
            '芥川龍之介「羅生門」を読む' => '芥川龍之介「羅生門」を読む会です！',
            '坂口安吾「桜の森の満開の下」' => '坂口安吾「桜の森の満開の下」、読んだ方の参加待ってます。',
            'フランス文学愛好会' => '隠れフランス文学ファンが集まるところ。それぞれ好きな作品について語ってください。',
            '『汚れつちまつた悲しみに』読会' => '中原中也『汚れつちまつた悲しみに』について語りましょう。',
            '「レ・ミゼラブル」翻訳家ごとの特色' => 'それぞれのいいとこ、悪いとこあると思います。語りませんか？',
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
