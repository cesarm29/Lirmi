<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('tasks')->insert([
			['id'=>1, 'text'=>'Actividades #1', 'start_date'=>'2017-04-01 00:00:00', 'duration'=>7, 'progress'=>0.7, 'parent'=>0],
			['id'=>2, 'text'=>'Tarea #1', 'start_date'=>'2017-04-06 00:00:00', 'duration'=>4, 'progress'=>0.5, 'parent'=>1],
			['id'=>3, 'text'=>'Tarea #2', 'start_date'=>'2017-04-05 00:00:00', 'duration'=>6, 'progress'=>0.7, 'parent'=>1],
			['id'=>4, 'text'=>'Tarea #3', 'start_date'=>'2017-04-07 00:00:00', 'duration'=>2, 'progress'=>0, 'parent'=>1],
			['id'=>5, 'text'=>'Sub Tarea #1.1', 'start_date'=>'2017-04-05 00:00:00', 'duration'=>5, 'progress'=>0.34, 'parent'=>2],
			['id'=>6, 'text'=>'Sub Tarea #1.2', 'start_date'=>'2017-04-11 00:00:00', 'duration'=>4, 'progress'=>0.5, 'parent'=>2],
			['id'=>7, 'text'=>'Sub Tarea #2.1', 'start_date'=>'2017-04-07 00:00:00', 'duration'=>5, 'progress'=>0.2, 'parent'=>3],
			['id'=>8, 'text'=>'Sub Tarea #2.2', 'start_date'=>'2017-04-06 00:00:00', 'duration'=>4, 'progress'=>0.9, 'parent'=>3]
		]);
	}
}
