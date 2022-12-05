# PHP SSH 

Projeto criação para criação do primeiro packagist. 
É um arquivo muito simples.

## Como utilizar? 

Para usar basta seguir o exemplo abaixo:

```php
    <?php
    require __DIR__.'/vendor/autoload.php';

    // Dependency
    use \App\Rui\SSH;

    // Create Instancy
    $objectSSH = new SSH;

    $objectSSH->hello();
```