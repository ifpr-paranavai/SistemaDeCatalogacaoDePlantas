<?php

namespace Tests\Feature;

use App\Models\OrdemPlanta;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrdemDaPlantaTest extends TestCase
{
    use RefreshDatabase;

    public function testCriarOrdemPlanta()
    {
        $dados = [
            'nome' => 'Ordem de Teste',
            'descricao' => 'Descrição da Ordem de Teste'
        ];

        $ordemPlanta = OrdemPlanta::create($dados);

        $this->assertInstanceOf(OrdemPlanta::class, $ordemPlanta);
        $this->assertDatabaseHas('ordem_plantas', $dados);
    }

    public function testAtualizarOrdemPlanta()
    {
        $ordemPlanta = OrdemPlanta::factory()->create();

        $dadosAtualizados = [
            'nome' => 'Novo Nome',
            'descricao' => 'Nova Descrição'
        ];

        $ordemPlanta->update($dadosAtualizados);

        $this->assertEquals('Novo Nome', $ordemPlanta->nome);
        $this->assertEquals('Nova Descrição', $ordemPlanta->descricao);
    }

    public function testExcluirOrdemPlanta()
    {
        $ordemPlanta = OrdemPlanta::factory()->create();
        $response = $this->delete('/api/ordens-plantas/' . $ordemPlanta->id);

        $this->assertDatabaseMissing('ordem_plantas', ['id' => $ordemPlanta->id]);
        $response->assertNoContent();
    }
}
