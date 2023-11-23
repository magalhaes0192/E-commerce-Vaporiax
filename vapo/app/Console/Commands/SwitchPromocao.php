<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Produto;

class SwitchPromocao extends Command
{
    protected $signature = 'promocao:switch';
    protected $description = 'Switch to the next promotion';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Obtenha a promoção atual com base no campo "promocaoDia"
        $currentPromocao = Produto::where('promocaoDia', true)->first();

        if ($currentPromocao) {
            // Desative a promoção atual
            $currentPromocao->update(['promocaoDia' => false]);

            // Obtenha a próxima promoção (você deve implementar a lógica para isso)
            $nextPromocao = Produto::where('promocaoDia', true)->first();

            if ($nextPromocao) {
                // Ative a próxima promoção
                $nextPromocao->update(['promocaoDia' => true]);
            }
        }
        
        $this->info('Promoção alternada com sucesso.');
    }
}
