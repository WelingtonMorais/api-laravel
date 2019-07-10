# API-LARAVEL
<p>Utilizar o Framework LARAVEL e criar uma API RESTFul interagindo os métodos GET,POST,PUT E DELETE relacionado no Banco de Dados,onde é relacionado a API criada.</p>

<br>
<h1>Apresentação do Projeto:</h1>
	<p>O projeto tem como objetivo utilizar o Framework LARAVEL e criar uma API RESTFul interagindo os métodos GET,POST,PUT E DELETE relacionado no Banco de Dados,onde é relacionado a API criada.</p>
<br>
<h1>Softwares utilizados para o projeto:</h1>

<ul>
	<li>Laragon (servidor)</li>
	<li>Visual Studio Code (editor de texto).</li>
	<li>Composer (gerenciador de dependência PHP).</li>
	<li>HeidiSQL (realizar consultas).</li>
	<li>PostMan (para trabalhar com as API’s).</li>
<ul>

<h5>Nome da aplicação será : api-codificar</h5>
<h5>URL do link gerado pelo laragon : http://api-codificar.test/api/deputados</h5>


<br>
<h1>Instruções antes de iniciar o projeto:</h1>
<h3>PASSO 1:</h3>
<ul>
	<li>Abra o HeidiSql  e crie um novo banco de dados chamado <b>`web-api-codificar`</b> e modifique a colação para  <b>'utf8mb4_general_ci'.</b></li>
	<li>crie um novo usuário chamado <b>‘codificar’</b> com a senha <b>‘123456’</b> e relaciono o banco de dados <b>web-api-codificar</b> ao usuário <b>codificar.</b></li>
</ul>
<p>Justificação: O Laragon cria automaticamente o banco de dados,porém é preciso realizar um ajuste na colação,por isso devemos criar um novo banco de dados.Portanto,pode ser excluído o banco de dados criado automaticamente pelo Laragon chamado api-codificar.</p>


<h3>PASSO 2:</h3>
<p>Use os seguintes comandos no terminal do Laragon para criar o banco de dados:</p>
	
	cd C:\laragon\www\api-codificar 	// direcionar para o repositório do projeto
	
	
	php artisan migrate:refresh

<br><br>
<h1>O PROJETO</h1>

<br>
<h4><b>1.criação dos models e migrations:</b></h4>

 <p>Ocorre uma alteração no <b>arquivo.env</b></p>
<p>modificado as seguintes parte do <b>db_connection=mysql</b></p>


	DB_DATABASE=web-api-codificar
	DB_USERNAME=codificar
	DB_PASSWORD=123456



<br>
<h4><b>2.Alteração do arquivo config/app.php com o objetivo de alterar o horário caso alguém manipule o projeto.</b></h4>

	'timezone' => 'UTC',

para
	
     'timezone' => 'America/Sao_paulo',


<br>

<h4><b>3. Criar uma nova pasta model com o arquivo model e realizar uma migration</b></h4>

<p>Abrir terminal laragon e seguir os comandos:</p>

		 
	cd C:\laragon\www\api-codificar	//para direcionar para o repositório do projeto
	
	php artisan make:model Models\Deputado -m //para criar uma nova pasta,um model chamada deputado e criar uma migration na pasta database.

<br>
<h4><b>4.Criando tabelas automaticamente.</b></h4>

<p>Ir na pasta database no arquivo migration do deputado</p>
<p>criar as seguintes variáveis seguidas do ID.</p>
	
	$table->bigIncrements('id');
        $table->bigInteger('id_deputado')->unique();
        $table->string('nome',150);
        $table->string('partido,50');
        $table->bigInteger('MES1')->nullabel();
        $table->bigInteger('MES2')->nullabel();
        $table->bigInteger('MES3')->nullabel();
        $table->bigInteger('MES4')->nullabel();
        $table->bigInteger('MES5')->nullabel();
        $table->bigInteger('MES6')->nullabel();
        $table->bigInteger('MES7')->nullabel();
        $table->bigInteger('MES8')->nullabel();
        $table->bigInteger('MES9')->nullabel();
        $table->bigInteger('MES10')->nullabel();
        $table->bigInteger('MES11')->nullabel();
        $table->bigInteger('MES12')->nullabel();
	$table->timestamps();

<p>Ir ao terminal e digitar o seguinte comando:</p>

 
     php artisan migrate:refresh

<br>
<h4><b>5.Criar Controller<b></h4>

<p>Ir ao terminal e digitar:</p>

	php artisan make:controller Api\DeputadoApiController		//criar pasta api e o arquivo controller</p>



<br>
<h4><b>6. Método post inserindo dados.</b></h4>
<ul>
	<li>Abro o Postman.</li>
	<li>Selecionar o método POST.</li>
	<li>Inserir a url do projeto http://api-codificar.test/api/deputados</li>
	<li>Nos campos Key insira os nomes iguais da tabela e na mesma ordem.</li>
	<li>EX: (id_deputado,nome,partido,MES1,MES2,MES3,MES4,MES5,MES6,MES7,MES8,MES9,MES10,MES11,MES12)</li>
</ul>
<br>
<h4><b>7. Configurando o arquivo config/filesystems.php</b></h4>

<p>Mudar para público na parte ‘default’ (exemplo de como deve ficar).</p>

    default' => env('FILESYSTEM_DRIVER', 'public'),

<br>
<h4><b>8.Realizando alteração para utilizar a pasta storage dentro da pasta public.</b></h4>
<p>Abrir o terminal e utilizar este comando:</p> 
        
	php artisan storage:link 	



<br><br>
<h1>Referências do Projeto:</h1>
<p>Documentação Láravel:</p> https://laravel.com/
<p>Fórum,instruções do site DevMedia e Stackoverflow :</p> 
<ul>
	<li>https://www.devmedia.com.br/</li>
	<li>https://stackoverflow.com/</li>
</ul>





















<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
