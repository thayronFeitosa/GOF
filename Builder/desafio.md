# 🧩 Problema Simples para Ser Resolvido com Builder

Você precisa criar um sistema que monta lanches personalizados para um fast-food. 

Cada cliente pode montar seu lanche escolhendo:
- Tipo de pão
- Tipo de carne
- Queijos opcionais
- Molhos opcionais
- Ingredientes extras
- Tamanho (pequeno, médio, grande)

Nem todos os clientes escolhem tudo. Alguns querem só pão + carne, outros querem lanche completo com vários adicionais. 

Além disso:
- Cada ingrediente extra muda o preço.
- Alguns molhos só podem ser adicionados em tamanhos médios ou grandes.
- O lanche só pode ser montado na ordem correta (pão → carne → queijo → extras → fechar pedido).

## O problema atual no sistema é:
- O código ficou cheio de if e else para verificar cada combinação possível.
- Há muitos parâmetros opcionais que deixam o método de criação confuso.
- A cada ingrediente novo, o código do método cresce e fica mais difícil de manter.
- Para montar um lanche simples ou completo, o mesmo método enorme precisa ser chamado.

## 🎯 Objetivo

Ter uma forma limpa de montar diferentes tipos de lanches:
- Lanche simples
- Lanche vegetariano
- Lanche completo
- Lanche premium
- Lanche infantil

Sem precisar reescrever milhares de ifs, e sem manter um método gigante cheio de parâmetros opcionais.

## 💡 Por que o Builder encaixa perfeitamente?

Porque:
- O lanche é montado passo a passo.
- Existem opções flexíveis e opcionais.
- Há regras específicas dependendo do tamanho e dos extras.
- Queremos montar diferentes versões do mesmo "produto" sem complicar o código.

