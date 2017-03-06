<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder{
	public function run(){
		Categoria::create(['nome' => 'Eletrodomestico']);
		Categoria::create(['nome' => 'Eletronicao']);
		Categoria::create(['nome' => 'Brinquedo']);
		Categoria::create(['nome' => 'Esportes']);
	}
}