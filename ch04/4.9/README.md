Abstração de Classes 

O PHP 5 introduz métodos e classes abstratas. Classes definidas como abstratas não podem ser instanciadas, e qualquer classe que contenha ao menos um método abstrato também deve ser abstrata. Métodos são definidos como abstratos declarando a intenção em sua assinatura - não podem definir a implementação.

Ao herdar uma classe abstrata, todos os métodos marcados como abstratos na na declaração da classe pai devem ser implementados na classe filha; adicionalmente, estes métodos devem ser definidos com a mesma (ou menos restrita) visibilidade. Por exemplo, se um método abstrato for definido como protegido, a implementação da função deve ser definida como protegida ou pública, mas não privada. Além disso, a assinatura do método deve coincidir, isso é, as induções de tipo e o número de argumentos exigidos devem ser os mesmos. Por exemplo, se a classe filha define um argumento opcional, e a assinatura do método abstrato não, há um conflito na assinatura. Também se aplica a construtores a partir do PHP 5.4. Em versões anteriores a 5.4, as assinaturas dos construtores poderiam ser diferentes. 

https://www.php.net/manual/pt_BR/language.oop5.abstract.php