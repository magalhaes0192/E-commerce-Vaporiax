<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = ['5000', '4000', '6000', '10000'];
        $marcas = ['elfbar', 'ignite', 'lostmary', 'oxbar'];
        $sabores = ['uva', 'limao', 'melancia', 'banana'];
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' =>$this->faker->paragraph(),
            'preco' =>$this->faker->randomNumber(2),
            'precoProduto' =>$this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400,400),
            'estoque' => $this->faker->randomNumber(1),
            'id_user' => User::pluck('id')->random(),
            'destaque' =>$this->faker->randomElement([true, false]), 
            'novoProduto' =>$this->faker->randomElement([true, false]), 
            'recemProduto' =>$this->faker->randomElement([true, false]), 
            'bemAvaliado' =>$this->faker->randomElement([true, false]), 
            'ativo' =>$this->faker->randomElement([true, false]), 
            'visivel' =>$this->faker->randomElement([true, false]), 
            'puffs' => $this->faker->randomElement($tipos),
            'marca' => $this->faker->randomElement($marcas),
            'sabor' => $this->faker->randomElement($sabores),
            'palavrasChave' => $this->faker->paragraph(),
            'promocao' => $this->faker->randomNumber(2),
            'promocaoDia' => $this->faker->randomElement([true, false]),
        ];
    }
}
