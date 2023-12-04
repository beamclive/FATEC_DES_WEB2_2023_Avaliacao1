# Desafio Técnico da matéria de Desenvolvimento web 2

Criar um cadastro em PHP de alunos que poderão fazer uso do estacionamento da Fatec Araras. Os campos que devem estar cadastrados são:

Nome Completo
Registro Acadêmico (R.A.)
Placa do Carro ou Moto
Para poder fazer uso do estacionamento, o setor de vigilância irá conferir se o aluno e carro estão cadastrados.

1- DashBoard - Área de login/logout 
Com uso de sessões (sessions), criar uma área de login. Permitir encessar sessão (logout). Para realizar login/logout, necessário ter um único login e senha.
Login: portaria
Senha: FatecAraras

2- Criar registro 
Cadastrar os campos supracitados em arquivo texto. Será possível realizar o cadastro somente em uma sessão ativa. Ao tentar cadastrar em uma sessão desativada, redirecionar para a área de login.

No arquivo texto, o padrão de gravação deve ser: Nome, seguido de uma barra, RA,seguido de uma barra e a placa do carro/moto.

Exemplo:

José da Silva|202311111111|ABC1234
Maria de Souza|202322222222|ABC1234


3- Ler todos os registros cadastrados
Em uma área de sessão, permitir ler todos os registros cadastrados no arquivo texto. Caso não esteja em uma sessão ativa, redirecionar para a área de login.

Tecnologias: PHP Estruturado.
