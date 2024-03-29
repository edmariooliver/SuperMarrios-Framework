# supermarrios-MVC-Framework


### Resolvi criar esse framework para estudo. Se for útil pra você, pode usar e contribuir como quiser :)
Grande abraço!

<hr>

## Doc 
## 1 - Loader de Helper, resumo: É um require_once elegante
### Você pode carregar funções de uma arquivo de Helper dentro do seu controller, utilize o:

#### Helpers/FirstHelper.php
```php
<?php

function teste()
{
    echo "RODANDO HELPER";
}
```

#### TesteController.php

```php
<?php

namespace App\Controllers\Api;

use SM\Core\SMController;

class TesteController extends SMController
{

    public function index($params)
    {
        // Carregando o Helper
        $this->helper->load("FirstHelper");
        teste();
    }
}

```
### Com isso você inclui o arquivo de Helper de forma elegante no seu controller.

<hr>

## 2 - Acessando inputs de uma request
```php
<?php

namespace App\Controllers\Api;

use SM\Core\SMController;

class Teste extends SMController
{

    public function index()
    {
        // Pegando input recebido na requisição
        $email = $this->request->email;
    }
}
```
<hr>

## 3 - Criando response
### O response->make cria uma nova resposta Json
```php
<?php

namespace App\Controllers\Api;

use SM\Core\SMController;

class Teste extends SMController
{

    public function index($params)
    {
        // Retornando uma resposta Json
        return $this->response->make(201, ["Olá, eu sou uma resposta JSON"]);
    }
}

```
### O primeiro parâmetro é referente ao status HTTP da resposta, o segundo parâmetro é referente ao conteúdo do corpo da resposta.

<hr>

## 4 - Roteamento
### Aqui está a documentação do gerenciador de rotas
### https://github.com/edmariooliver/Router

## 5 - Validadores de dados
### Aqui está a documentação dos validadores
### https://github.com/edmariooliver/Validadores