<?php

namespace Database\Seeders;

use App\Models\Task;
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
            'title' => 'Nova Task',
            'description' => 'Uma nova task adicionada',
            'startDate' => '2022-12-12 00:00:00',
            'completedDate' => '2023-12-12 00:00:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
use HasFactory;