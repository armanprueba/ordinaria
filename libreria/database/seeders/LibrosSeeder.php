<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{

    public function run(): void
    {
        $titulos = ["Cien años de soledad","El señor de los anillos","1984",
        "Un mundo feliz","Orgullo y prejuicio","Crimen y castigo,","Lolita",
        "Ulises","Madame Bovary","En busca del tiempo perdido"];
        $autores = ["Gabriel García","J. R. R. Tolkien","George Orwell",
        "Aldous Huxley","Jane Austen","Fiódor Dostoyevski,","Vladimir Nabokov",
        "James Joyce","Gustave Flaubert","Marcel Proust"];

        $faker = Faker::create();

        for($i = 0; $i < 10; $i++){
        $libro = new Libro();
        $libro->titulo = $titulos[$i];
        $libro->autor = $autores[$i];
        $libro->editorial = $faker->randomElement(['Alfguara','Planeta','
        Bromera', 'Sudamericana', 'Francisco de Robles', 'Bayern']);
        $libro->fechas = $faker->date($format = 'Y-m-d', $max = 'now');
        $libro->save();
        }
    }
}
