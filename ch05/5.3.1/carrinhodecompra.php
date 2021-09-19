<?php

class Produto
{
    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo, $nome, $preco)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setPreco($preco);
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

class CarrinhoDeCompra implements Iterator
{
    // Array para guardar os produtos
    private $produtos;

    public function __construct()
    {
        $this->produtos = array();
    }

    // Coloca o ponteiro do array no primeiro elemento
    public function rewind()
    {
        reset($this->produtos);
    }

    // retorna o elemento corrente
    public function current()
    {
        $var = current($this->produtos);
        return $var;
    }

    // retorna a chave do array do elemente corrente
    public function key()
    {
        $var = key($this->produtos);
        return $var;
    }

    // retorna o proximo elemento
    public function next()
    {
        $var = next($this->produtos);
        return $var;
    }

    // verifica se existe proximo elemento
    public function valid()
    {
        $var = $this->current() !== false;
        return $var;
    }

    // configura um novo array de produtos para o carrinho
    public function setArrayProdutos($produtos)
    {
        $this->produtos = $produtos;
    }

    // retorna o array de produtos do carrino de compras
    public function getArrayProdutos()
    {
        return $this->produtos;
    }

    // adiciona produtos ao carrinho
    public function adicionaProduto($produto)
    {
        $this->produtos[$produto->getCodigo()] = $produto;
    }

    // remove produtos do carrinho
    public function removeProduto($produto)
    {
        unset($this->produtos[$produto->getCodigo()]);
    }
}


// criando três produtos
$produto1 = new Produto(1, "Bicicleta", 300.00);
$produto2 = new Produto(2, "Notebook", 2500);
$produto3 = new Produto(3, "Camiseta", 29.90);

// criando o carrinho de compras e adicionando os 3 produtos
$carrinho = new CarrinhoDeCompra();
$carrinho->adicionaProduto($produto1);
$carrinho->adicionaProduto($produto2);
$carrinho->adicionaProduto($produto3);

$carrinho->rewind();

echo "Chave atual ".$carrinho->key()."\n";
print_r($carrinho->current());

$carrinho->next();
if ($carrinho->valid()) {
    echo "Chave atual ".$carrinho->key()."\n";
    print_r($carrinho->current());
    $carrinho->next();
}

if ($carrinho->valid()) {
    echo "Chave atual ".$carrinho->key()."\n";
    print_r($carrinho->current());
    $carrinho->next();
}

if (!$carrinho->valid()) {
    echo "O array de produtos já atingiu o seu final \n";
}

$carrinho->removeProduto($produto2);

echo "Quantidade de produtos no carrinho de compra: ".count($carrinho->getArrayProdutos())."\n";

?>