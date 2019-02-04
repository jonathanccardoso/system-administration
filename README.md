# System Administration

> Sistema de administração utilizando framework CodeIgniter.

## Ambiente

* [CodeIgniter](https://www.codeigniter.com/)
* [TCPDF](https://github.com/bcit-ci/CodeIgniter)
* [Xampp](https://www.apachefriends.org/pt_br/download.html)
* [Sublime Text](https://www.sublimetext.com/3)

## Autor

**Jonathan Cardoso**

- <https://linkedin.com/in/jonathan99moura/>
- <https://github.com/jonathanccardoso>

<!--

 - Arquivos mais usados:
 - routes, controllers, models e views.

## Diretórios

- /user_guide - apagar apos a produção
- /system - o nucleo do sistema (nunca mexer)
- /application - é o src, 
  - /config - bd, rotas, ...
  - /controllers - controllers
  - /models - modelos 
  - /views - views 

## Url

- chamar controller

/controller/metodo-especifico

- para chamar o metodo index() do controller BaseController
na url coloco: /index.php/BaseController

- chamar o metodo login() do controller BaseController
na url coloco: /index.php/BaseController/login

- o arquivo raiz pode ser alterado no config/routes.php de 'welcome' para 'meu-controller'

## Banco de dados

- 1 empresa => * colaboradores

create table empresa (
id_empresa int not null auto_increment,
nome varchar(40) not null,
cnpj varchar(18) not null,
email varchar(40) not null,
primary key (id_empresa)
)default charset = utf8;

--- 

create table colaborador (
id_colaborador int not null auto_increment,
email varchar(40) not null,
nome varchar(40) not null,
cpf varchar(14) not null, 
sexo enum('M', 'F') not null,
primary key (id_colaborador)
)default charset = utf8;

++ foreign key / key=MULL
use system_administration;
describe system_administration;
alter table colaborador add empresa_id int;

++
alter table colaborador
add foreign key (empresa_id)
references empresa(id_empresa);

++ dando update para cada
update colaboradores set id_empresa = '6' where id='1';
//6 - id da empresa
//1 - id do colaborador

++
INSERT INTO `empresa`(`id_empresa`, `nome`, `cnpj`, `email`) VALUES ('2','Tech','36.615.274/0001-89','contato@tech.com.br')

INSERT INTO `colaborador`(`id_colaborador`, `email`, `nome`, `cpf`, `sexo`, `empresa_id`) VALUES ('2','contato@eduarda.com.br','Eduarda Lima', '647.355.750-57','F','1')

-->
