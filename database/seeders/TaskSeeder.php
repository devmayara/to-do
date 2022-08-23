<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Tesk de Exemplo',
            'description' => 'Exemplo',
            'due_data' => '2022-08-23 00:00:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
