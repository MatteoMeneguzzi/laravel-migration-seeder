<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 15; $i++) {
            // Creazione istanza (row/record)
            $new_travel = new Travel();

            // Popolazione colonne 
            $new_travel->title = 'Magic travel experience n. ' . rand(1, 150);
            $new_travel->weeks = rand(1, 4);;
            $new_travel->address = 'Magic street n. ' . rand(1, 300);
            $new_travel->city = 'Magic city n. ' . rand(1, 20);
            $new_travel->state = 'Magic state n. ' . rand(1, 10);
            $new_travel->square_meters = rand(100, 300);
            $new_travel->rooms = rand(3, 6);
            $new_travel->description = 'This is a magic house';
            $new_travel->price = rand(1000, 5000);
            $new_travel->rating = rand(1, 10);

            // $table->id();
            // $table->string('title', 200);
            // $table->date('departure');
            // $table->date('return');
            // $table->string('address', 100);
            // $table->string('city', 100);
            // $table->string('state', 100);
            // $table->smallInteger('square_meters')->unsigned();
            // $table->tinyInteger('rooms')->unsigned();
            // $table->text('description')->nullable();
            // $table->smallInteger('price')->unsigned();
            // $table->tinyInteger('rating')->unsigned()->after('price');
            // $table->boolean('Is_available')->default(1);
            // $table->timestamps();

            // Salvare record a db
            $new_travel->save();
        }
    }
}
