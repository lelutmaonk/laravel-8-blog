<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Post::create([
            'title' => 'Antimage',
            'slug' => 'antimage',
            'body' => 'The monks of Turstarkuri watched the rugged valleys below their mountain monastery as wave after wave of invaders swept through the lower kingdoms. Ascetic and pragmatic, in their remote monastic eyrie they remained aloof from mundane strife, wrapped in meditation that knew no gods or elements of magic. ',
            'image' => 'https://cdn.kincir.com/2/L1HPJ2T2spdTZ4C4aVzFeF40Y74dTT5H36tnAsm293A/transform/rs:fill:764:400/src/production/2019-08/f1895004e7d2ecbd5fbf141b637e6136e12bd2cc.jpg',
            'category_id' => 1
        ]);

        Post::create([
            'title' => 'Arc Warden',
            'slug' => 'arc-warden',
            'body' => 'Before the beginning of all, there existed a presence: a primordial mind, infinite, awesome, and set to inscrutable purpose. As the universe thundered into being, this mind was fragmented and scattered. ',
            'image' => 'https://cdn.kincir.com/2/oIV1r6aLOAFCBjgcCnyybPwqgSk3rBt8dr8DFSCPHbw/transform/rs:fill:764:400/src/production/2019-08/57d1bd325584fe2f8fcd0f54446d3dee42c045a5.jpg',
            'category_id' => 1
        ]);

        Post::create([
            'title' => 'Techies',
            'slug' => 'techies',
            'body' => 'For the Techies, battle is a matter of mischief. Giggling while they lay their traps throughout the battlefield, their explosive mines, stunning traps, and remote-activated bombs are often more than enough to surprise careless foes or shatter an enemy offensive.',
            'image' => 'https://static.gosugamers.net/82/25/71/f57ac97cc5b4992fe22a205ae90b5aed38dc80bf7c81f0f9231914dc34.png?w=1200',
            'category_id' => 1
        ]);
    }
}
