<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for ($i=1; $i < 6; $i++) { 

            DB::table('plans')->insert([
                'plan_name' => 'Plan '.$i,
                'plan_description' => 'description of plan '.$i,
                'plan_difficulty' => $i,
            ]);

            DB::table('plan_days')->insert([
                'day_name' => 'Day '.$i,
                'plan_id' => $i,
                'order' => $i,
            ]);

            DB::table('exercise_instances')->insert([
                'exercise_id' => $i,
                'exercise_duration' => $i*200,
                'order' => $i,
            ]);

            DB::table('exercises')->insert([
                'exercise_name' => 'Exercise '.$i,
            ]);

            DB::table('users')->insert([
                'firstname' => 'userfirst'.$i,
                'lastname' => 'userlast'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'plan_id' => $i,
            ]);

            for ($j=1; $j <= $i; $j++) { 
                DB::table('exercise_instance_plan_day')->insert([
                    'exercise_instance_id' => $i,
                    'plan_day_id' => $j,
                ]);
            }

        }
    }
}
