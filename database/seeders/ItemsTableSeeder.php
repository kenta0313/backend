<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $item_seeds = [
            [
                'name' => 'チキンカレー',
                'amount' => '680',
                'image' => 'chickencurry.png',
                'calory' => 'カロリー158kcal',
                'sugar' => '糖質（17.31グラム）',
                'dietary' =>'食物繊維（0.64グラム）',
                'protein' =>'たんぱく質（5.52グラム）',
            ],
            [
                'name' => 'ミートソース',
                'amount' => '700',
                'image' => 'meatsauce.png',
                'calory' => 'カロリー156kcal',
                'sugar' => '糖質（21.1グラム）',
                'dietary' =>'食物繊維（1.35グラム）',
                'protein' =>'たんぱく質（5.55グラム）',
            ],
            [
                'name' => 'トマトソース',
                'amount' => '750',
                'image' => 'tomatosauce.png',
                'calory' => 'カロリー168kcal',
                'sugar' => '糖質（21.02グラム）',
                'dietary' =>'食物繊維（1.4グラム）',
                'protein' =>'たんぱく質（5.46グラム）',
            ],
            [
                'name' => 'ペペロンチーノ',
                'amount' => '800',
                'image' => 'peperoncino.png',
                'calory' => 'カロリー211kcal',
                'sugar' => '糖質（17.31グラム）',
                'dietary' =>'食物繊維（0.64グラム）',
                'protein' =>'たんぱく質（5.52グラム）',
            ],
        ];
        foreach($item_seeds as $item) {
            DB::table('items')->insert($item);
        }
    }
}
