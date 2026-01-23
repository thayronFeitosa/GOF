# ☕ Desafio Avançado — Padrão de Projeto Prototype (Coffee)

## 📌 Visão Geral

Este projeto tem como objetivo demonstrar o uso **avançado e consciente** do **padrão de projeto Prototype**, aplicando-o em um sistema de preparo de cafés que exige:

- Criação eficiente de objetos
- Isolamento completo de estado
- Combinação com outros padrões
- Regras de negócio reais
- Evolução sem impacto nos protótipos existentes

O foco não é apenas “clonar objetos”, mas **entender quando, por que e como usar Prototype de forma segura e escalável**.

---

## 🧠 Contexto do Problema

Uma cafeteria trabalha com **receitas base de café**, que servem como modelos iniciais para a maioria dos pedidos.

Na prática:
- A maior parte dos cafés são **variações mínimas**
- Criar cada café do zero é redundante
- As receitas possuem **estado interno complexo**
- O sistema precisa permitir **customizações sem efeitos colaterais**

O sistema atual sofre com:

- Construtores extensos e difíceis de manter
- Alto acoplamento entre criação e regras de negócio
- Repetição de código
- Dificuldade para adicionar novos tipos de café
- Risco de vazamento de estado entre objetos

---

## 🎯 Objetivo do Desafio

Criar um sistema que permita:

- Definir cafés base como **protótipos**
- Criar novas variações exclusivamente via **clonagem**
- Garantir **isolamento total de estado** (deep copy)
- Aplicar regras de negócio após a clonagem
- Evoluir o sistema sem alterar cafés já existentes

---

## ☕ Modelo de Domínio

### Coffee
Cada café deve conter:

- Tamanho (pequeno, médio, grande)
- Intensidade do café
- Leite (sim ou não)
- Quantidade de açúcar
- Receita (objeto interno)
- Preço final (calculado dinamicamente)

---

### Recipe (Objeto Interno)

A receita deve conter:
- Lista de ingredientes
- Quantidade de cada ingrediente
- Custo base da receita

⚠️ A `Recipe` **não pode ser compartilhada** entre cafés clonados.

---

## 🧩 Regras de Negócio (Obrigatórias)

- Alterar a receita de um café **não pode afetar outros cafés**
- O protótipo original **nunca pode ser modificado**
- O preço final deve ser recalculado após qualquer modificação
- Algumas regras dependem do tamanho:
  - Certos ingredientes só podem ser adicionados em tamanhos médio ou grande
- O sistema deve impedir configurações inválidas

---

## 🏗️ Solução Proposta

A solução deve utilizar:

- **Prototype** como padrão principal
- Clonagem profunda (`deep copy`)
- Registro de protótipos
- Separação clara entre:
  - Criação do objeto
  - Regras de negócio
  - Cálculo de preço

---

## 📋 Requisitos Técnicos

### 1️⃣ Prototype
- Interface `CoffeePrototype`
- Método `clone()` obrigatório
- Uso explícito de `__clone()` quando necessário

---

### 2️⃣ Protótipos Base

Criar ao menos os seguintes protótipos:

- Café padrão da casa
- Espresso
- Cappuccino

⚠️ Após registrados, os protótipos **não devem ser alterados**.

---

### 3️⃣ Registro de Protótipos

Criar um `CoffeeRegistry` que:
- Armazene os protótipos
- Retorne sempre **clones**
- Nunca exponha o objeto original

---

### 4️⃣ Clonagem Profunda (Obrigatório)

Ao clonar um café:
- A receita deve ser clonada
- Listas internas devem ser copiadas
- Nenhum estado mutável pode ser compartilhado

---

### 5️⃣ Criação Controlada

- `new Coffee()` só pode ser usado:
  - Na criação inicial dos protótipos
- Todo café entregue ao cliente deve vir de `clone()`

---

## 🧪 Casos de Teste Esperados

Deve ser possível demonstrar que:

- Dois cafés clonados nunca compartilham a mesma receita
- Alterar ingredientes de um café não afeta outros
- O protótipo permanece intacto após múltiplas clonagens
- Regras de negócio são aplicadas corretamente após o clone
- O preço final reflete exatamente as modificações feitas

---

## 🔥 Desafios Extras (Nível Sênior)

### Extra 1️⃣ — Prototype + Factory
Criar uma `CoffeeFactory` que:
- Não instancia cafés
- Apenas retorna clones do `CoffeeRegistry`

---

### Extra 2️⃣ — Imutabilidade
Transformar `Coffee` em um objeto imutável:
- Nenhum setter direto
- Alterações retornam um **novo clone**

---

### Extra 3️⃣ — Comparação Arquitetural
Documentar:
- Por que Prototype é melhor que Factory neste cenário
- Quando Builder seria mais indicado
- Limitações reais do Prototype

---

## 🆚 Prototype vs Outros Padrões

- **Prototype**: cópia de estado existente
- **Builder**: construção passo a passo
- **Factory**: abstração da criação
- **Decorator**: extensão de comportamento (possível evolução)

---

## 🧠 Aprendizados Esperados

Ao concluir este desafio, deve ser possível:

- Explicar o Prototype com exemplos reais
- Justificar sua escolha arquitetural
- Identificar armadilhas de clonagem
- Combinar Prototype com outros padrões
- Aplicar o padrão em sistemas reais

---

## 🏁 Conclusão

Este desafio não é sobre café.

É sobre **controle de criação de objetos**, **isolamento de estado** e **arquitetura limpa**.

O padrão **Prototype** é poderoso, mas exige disciplina.  
Este projeto demonstra seu uso correto, consciente e profissional.

---

📌 *Este desafio faz parte de um plano de estudo para domínio completo dos padrões de projeto.*
