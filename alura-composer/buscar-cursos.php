<?php

require 'vendor/autoload.php'; // composer dumpautoload, para incluir os arquivos no autoload em composer.json para o autoload do php

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

Teste::metodo(); // classname
exibeMensagem('Teste do files em autoload'); // files

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}

// Iniciar: composer init
// composer list
// composer --help

// Repositorio principal do composer https://packagist.org/
// package-name: <nome_criador/nome_pacote>
// Baixar pacote: composer require symfony/dom-crawler

// Instalar pacotes do composer.json: composer install
// Atualizar pacotes do composer.json: composer update

// Adicionar arquivos no autoload: composer dumpautoload

// Baixar pacote para dev: composer require --dev phpunit/phpunit ^8
// Rodar em produção: composer install --no-dev
// composer separa os arquivos executaveis no (vendor/bin)

// composer require --dev "squizlabs/php_codesniffer=*"
// vendor/bin/phpcs -h
// vendor/bin/phpcs --standard=PSR12 src/

// https://getcomposer.org/doc/articles/scripts.md
// Executar scripts: composer nome_script
// Executar uma sequencia de scripts: run-scripts: ['@script1', '@script2']

// Versões
// https://semver.org/
// https://getcomposer.org/doc/articles/versions.md