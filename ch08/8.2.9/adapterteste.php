<?php
require_once("Produto.class.php");
require_once("Pedido.class.php");
require_once("PedidoLoja.class.php");
require_once("PedidoAdapter.class.php");
require_once("PedidoWeb.class.php");
require_once("PrePedido.class.php");
require_once("Venda.class.php");
require_once("FormaPagamento.class.php");

//criando produtos
$produto = new Produto(1, 15.25);
$produto2 = new Produto(2, 10);
$produto3 = new Produto(3, 12.81);

// criando as formas
$formadin = new FormaPagamento("Dinheiro", 0);
$formacheque = new FormaPagamento("Cheque", 8.75);

// trabalhando o pré-pedido
echo "\nTrabalhando o pré-pedido: ";

$prepedido = new PrePedido();
$prepedido->adicionaProduto($produto);
$prepedido->adicionaProduto($produto2);
$prepedido->adicionaProduto($produto3);

echo "\n* Total pré-pedido dos 3 produtos: " . $prepedido->calculaTotal();
$prepedido->removeProduto($produto3->getCodigo());
echo "\n* Total pré-pedido sem o produto 3: " . $prepedido->calculaTotal();

// trabalhando Pedido Loja
echo "\n\nTrabalhando pedido Loja: ";

$pedidoloja = new PedidoLoja($formacheque);
$pedidoloja->adicionaProduto($produto);
$pedidoloja->adicionaProduto($produto2);
$pedidoloja->adicionaProduto($produto3);

// indução de erro
try {
    $pedidoloja->calculaTotal();
} catch (Exception $e) {
    echo "\n --> Método calcula total da class PedidoLoja obsoleto.";
    echo "\n --> Erro: " . $e->getMessage();
}

$pedidoloja->removeProduto($produto2->getCodigo());
echo "\n* Total bruto pedido loja sem o produto 2: " . $pedidoloja->calculaTotalBruto();

// Trabalhando Pedido Web adaptado para as novas funções
echo "\n\nTrabalhando Pedido Web:";
$pedidoweb = new PedidoWeb($formadin);
$pedidoweb->adicionaProduto($produto);
$pedidoweb->adicionaProduto($produto2);
$pedidoweb->adicionaProduto($produto3);
echo "\n* Total pedido web bruto: " . $pedidoweb->calculaTotalBruto();
echo "\n* Total pedido web líquido: " . $pedidoweb->calculaTotalLiquido(1.06, 0);
echo "\n* Total pedido web final: " . $pedidoweb->calculaTotalFinal();

// agora a venda
echo "\n\nTrabalhando uma Venda com base em um Pedido Web:";
$venda = new Venda($pedidoweb);
echo "\n* Total venda feita pelo pedido web valor bruto: " . $venda->calculaTotalBruto();
echo "\n* Total acréscimos (+): " . $venda->getPedido()->getAcrescimo();
echo "\n* Total descontos (-): " . $venda->getPedido()->getDesconto();
echo "\n* Total venda feita pelo pedido web valor líquido: " . $venda->calculaTotalLiquido(0,0);
echo "\n* Total venda pedido web final: " . $venda->calculaTotalFinal();
echo "\n* Forma de pagamento utilizada na venda: " . $venda->getForma()->getDescricao();
echo "\n* Taxas de forma de pagamento utilizada na venda: " . $venda->getForma()->getTaxa();

// agora uma outra venda
echo "\n";
echo "\nTrabalhando uma Venda com base em um Pedido Loja: ";
echo "\n";
$venda = new Venda($pedidoloja);
echo "\n* Total venda feita pelo pedido web valor bruto: " . $venda->calculaTotalBruto();
echo "\n* Total acréscimos (+): " . $venda->getPedido()->getAcrescimo();
echo "\n* Total descontos (-): " . $venda->getPedido()->getDesconto();
echo "\n* Total venda feita pelo pedido web valor líquido: " . $venda->calculaTotalLiquido(0,0);
echo "\n* Total venda pedido web final: " . $venda->calculaTotalFinal();
echo "\n* Forma de pagamento utilizada na venda: " . $venda->getForma()->getDescricao();
echo "\n* Taxas da forma de pagamento utilizada na venda: " . $venda->getForma()->getTaxa();
echo "\n";
?>