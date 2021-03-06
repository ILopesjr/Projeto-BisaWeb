# Projeto Controle Financeiro Bisaweb #

# Tecnologias usadas: #

• CodeIgnite.

# Como rodar projeto: #
1 - Fazer download do projeto
2 - Descompactar o projeto
3 - Usar o comando no terminal -> composer install * Caso precise por causa DomPDF
4 - Abrir o MySQL e roda o script "db_bisaweb"
5 - Subir o servidor e rodar o projeto

# Desafio Bisaweb #

# OBJETIVOS #

Deverá ser desenvolvido um sistema de gestão financeira, permitindo o usuário ter um maior controle sobre seus gastos e receitas.

# ESPECIFICAÇÕES #

O sistema deve ser desenvolvido com as seguintes requisitos:

●	HTML5;
●	CSS3;
●	PHP com POO;
●	Javascript;
●	Framework CodeIgniter (preferencialmente na versão 3.x.x);
●	Banco de dados relacional;
●	Deverá ser disponibilizado no github.

# FUNCIONALIDADES #

O sistema deverá permitir ao usuário as seguintes funcionalidades:
●	Incluir, Remover, Alterar e Consultar Contas Bancárias.
●	Incluir, Remover, Alterar e Consultar Movimentação Financeira.
●	Relatório das movimentações, agrupadas por tipo de movimentação e por data das movimentações.

# ESTRUTURA DE CLASSES #

O sistema deverá ter a seguintes estruturas de classe:

Conta Bancária:

●	ID - Identificador único.
●	Descrição - Nome da conta bancária que o usuário irá definir. Ex: Santander Poupança.
●	Saldo Inicial - Não deve ser permitido cadastrar o valor menor que 0 (zero).

Movimentação Financeira:

●	ID - Identificador único.
●	Descrição - Nome da conta bancária que o usuário irá definir. Ex: Santander Poupança.
●	Tipo da Movimentação - Receita ou Despesa.
●	Valor - Não deve ser permitido cadastrar o valor menor ou igual que 0 (zero).
●	Data da Movimentação - Data o qual a movimentação foi feita.
●	Conta Bancária - Conta bancária que já esteja cadastrada.

# CASOS DE TESTE #

Conta Bancária:

●	Não deverá ser possível cadastrar uma conta com a "Descrição" vazia, ou seja, um conta sem nome.
●	Não deverá ser possível cadastrar uma conta com o “Saldo inicial” negativo ou vazio.
●	Não deverá ser possível consultar ou alterar uma conta que esteja excluída.

Movimentação Financeira:

●	Não deverá ser possível cadastrar uma Movimentação com a "Descrição" vazia, ou seja, um movimentação sem nome.
●	Não deverá ser possível cadastrar uma Movimentação com o valor negativo, vazio ou igual a zero.
●	Não deverá ser possível cadastrar uma Movimentação com o data vazia ou menor que 03/01/1992.
●	Não deverá ser possível cadastrar uma Movimentação sem um tipo da movimentação.
●	Não deverá ser possível cadastrar uma Movimentação sem uma conta relacionada.
●	Não deverá ser possível cadastrar uma Movimentação com uma conta excluída.
●	Não deverá ser possível consultar ou alterar uma Movimentação que esteja excluída.
