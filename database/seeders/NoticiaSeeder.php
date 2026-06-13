<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiaSeeder extends Seeder
{
    public function run()
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Nova versão do PHP traz melhorias de performance',
                'resumo' => 'PHP ganha otimizações significativas em sua nova versão.',
                'conteudo' => 'A nova versão do PHP apresenta melhorias no desempenho, suporte a novos recursos e maior segurança para aplicações modernas.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Avanços em IA transformam o mercado de trabalho',
                'resumo' => 'A inteligência artificial está impactando diversas profissões.',
                'conteudo' => 'Ferramentas de IA estão sendo utilizadas em larga escala, automatizando tarefas e criando novas oportunidades profissionais.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Como montar um PC gamer em 2026',
                'resumo' => 'Confira dicas para montar um computador de alto desempenho.',
                'conteudo' => 'Montar um PC gamer exige planejamento, escolha de peças compatíveis e atenção ao custo-benefício.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Cloud computing cresce entre pequenas empresas',
                'resumo' => 'Empresas estão migrando seus sistemas para a nuvem.',
                'conteudo' => 'A computação em nuvem oferece escalabilidade e redução de custos, tornando-se uma solução ideal para negócios em crescimento.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Principais ameaças de cibersegurança em 2026',
                'resumo' => 'Saiba como se proteger contra ataques digitais.',
                'conteudo' => 'Ataques como phishing e ransomware continuam em alta e exigem cada vez mais proteção e conscientização.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Frameworks JavaScript mais usados em 2026',
                'resumo' => 'Confira os frameworks mais populares do momento.',
                'conteudo' => 'React, Vue e Angular continuam dominando o mercado, com novas ferramentas surgindo constantemente.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'IA generativa revoluciona criação de conteúdo',
                'resumo' => 'Ferramentas de geração automática estão em alta.',
                'conteudo' => 'A IA generativa permite criar textos, imagens e vídeos de forma automatizada, trazendo inovação para diversos setores.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'SSD vs HD: qual escolher?',
                'resumo' => 'Entenda as diferenças entre SSD e HD.',
                'conteudo' => 'SSDs são mais rápidos e duráveis, enquanto HDs ainda oferecem maior capacidade com menor custo.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Multi-cloud: tendência nas empresas modernas',
                'resumo' => 'Uso de múltiplos provedores de nuvem cresce.',
                'conteudo' => 'A estratégia multi-cloud reduz riscos e aumenta a flexibilidade dos serviços digitais.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Boas práticas para proteger dados pessoais',
                'resumo' => 'Dicas essenciais de segurança digital.',
                'conteudo' => 'Utilizar autenticação em dois fatores e manter sistemas atualizados são práticas fundamentais.',
                'imagem' => null,
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
