<?php

namespace Tests\Feature;

use App\Models\ClassePlanta;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassePlantaTest extends TestCase
{
    use RefreshDatabase;

    public function testCriarClassePlanta()
    {
        $dados = [
            'nome' => 'Nome aleatório',
            'descricao' => 'Descrição aleatória só pra teste, mesmo. :)'
        ];

        $classe_plantas = ClassePlanta::create($dados);
        $this->assertInstanceOf(ClassePlanta::class, $classe_plantas);
        $this->assertDatabaseHas('classe_plantas', $dados);
    }

    public function testAtualizarClassePlanta()
    {
        $classe_plantas = ClassePlanta::factory()->create();

        $dadosAtualizado = [
            'nome' => 'Nome novo aleatório',
            'descricao' => 'Descrição nova aleatória',
        ];

        $classe_plantas->update($dadosAtualizado);

        $this->assertEquals('Nome novo aleatório', $classe_plantas->nome);
        $this->assertEquals('Descrição nova aleatória', $classe_plantas->descricao);
    }

    public function testExcluirClassePlanta()
    {
        $classe_plantas = ClassePlanta::factory()->create();
        $response = $this->delete('api/classe-plantas/' . $classe_plantas->id);

        $this->assertDatabaseMissing('classe_plantas', ['id' => $classe_plantas->id]);
        $response->assertNoContent();
    }
}
