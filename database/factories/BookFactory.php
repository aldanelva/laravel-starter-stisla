<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_buku' =>$this->faker->kode_buku(),
            'judul_buku' =>$this->faker->judul_buku(),
            'pengarang' =>$this->faker->pengarang(),
            'penerbit' =>$this->faker->penerbit(),
            'tahun_terbit' =>$this->faker->tahun_terbit(),
        ];
    }
}
