<?php

use Illuminate\Database\Seeder;

class WorkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('worker')->insert(
        	array(
        		[
        			'surname' => "Иванов",
        			'name' => "Иван",
        			'patronymic' => "Иванович",
        			'birthday' => "1972",
        			'position' => "Директор",
        			'salary' => "30000"

        		],
        		[
        			'surname' => "Иванова",
        			'name' => "Иванна",
        			'patronymic' => "Ивановна",
        			'birthday' => "1979",
        			'position' => "Гл.бух",
        			'salary' => "10000"

        		],
        		[
        			'surname' => "Петров",
        			'name' => "Петро",
        			'patronymic' => "Петрович",
        			'birthday' => "1983",
        			'position' => "Проект Менеджер",
        			'salary' => "20000"

        		],
        		[
        			'surname' => "Савченко",
        			'name' => "Евгений",
        			'patronymic' => "Владимирович",
        			'birthday' => "1984",
        			'position' => "Программист",
        			'salary' => "18000"

        		]

        		)
        	);
    }
}
