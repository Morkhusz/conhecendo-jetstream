# Conhecendo Jetstream

A ideia é trazer um repositório junto aos posts do blog laraveling.tech na categoria [jetstream](https://laraveling.tech/categorias/jetstream) para mostrar as funcionalidades do Jetstream, customizações e melhorias.

Para cada tópico abordado será criado um branch com um nome sugestivo, desta forma, para visualizar tudo que é feito em um tópico, basta baixar/clonar o repositório e acessar o branch específico e acompanhar todo código feito.

## Como começar

Baixe/clone este repositório e execute os passos de instalação abaixo.

Caso queira conhecer o jetstream antes de baixar o projeto eu criei um post de [introdução ao jetstream](https://laraveling.tech/conheca-o-laravel-jetstream/) e também recomendo fortemente a [documentação oficial](https://laravel.com/docs/8.x/installation#installing-laravel).

### Pré-Requisitos

- PHP versão >= 7.4
- Composer
- MySQL versão >= 5.7
- NodeJS e NPM/Yarn para compilar os assets

Caso prefira utilizar docker, na raiz do projeto existe um arquivo `docker-compose.yml` com o ambiente pré-moldado. 

Neste caso é um pré-requisito ter o docker e docker-compose instalados.

### Instalação

A partir da raiz do projeto é necessário realizar algumas etapas para poder começar, como compilar os assets, criar o banco de dados etc. Uma ordem interessante para fazer tudo funcionar seria:

### Dependências

**Instalar dependências da parte do PHP:**
```
composer install
```
**Instalar dependências da parte do JS:**
```
npm install
```
**Criar um arquivo `.env` contendo suas conexões de banco de dados.**

Neste repositório há um exemplo de `.env` em `.env.example` contendo as conexões de banco referentes ao container docker provido no arquivo `docker-compose.yml`.

**Criar a estrutura do banco de dados.**

Uma vez configurado o `.env` executar o comando abaixo para criar a estrutura do banco de dados necessária para o projeto:
```
php artisan migrate
```

**Compilar assets**

Para gerar o primeiro build do projeto utilizar o comando:
```
npm run dev
```

**Visualizando o projeto**

Caso não esteja utilizando o docker do projeto, aponte a pasta `public/` desta aplicação para seu webserver favorito, abaixo segue um exemplo utilizando o webserver embutido do php:
```
// a partir da raiz do projeto
$ php -S 127.0.0.1:8000 -t public/
```

E acesse em seu navegador a url `http://localhost:8000`.

Caso esteja utilizando o docker provido:
```
// a partir da raiz do projeto
$ docker-compose up -d // inicia os containers em background
```
E acesse em seu navegador a url `http://jetstream.test`

## Sugestões

Para sugestões de melhoria e solicitações de tópicos para a série, fique a vontade para [abrir uma issue](https://github.com/Morkhusz/conhecendo-jetstream/issues/new)

## Autores

* **José Filho** - [Github](https://github.com/Morkhusz)

## Licença

Este projeto é licenciado através da MIT License.
