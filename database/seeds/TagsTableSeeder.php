<?php
/**
 * Created by Leon.
 * User: Leon Lee
 * Date: 2019/2/13
 * Time: 21:15
 */

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 5)->create();
    }
}