show databases; -- show databases mostra
-- os banco de dados no servidor
create database aula_php_quarta;
	use aula_php_quarta; -- use "entrar" no banco de dados 
    show tables; -- mostra as tabelas dentro do banco de dados
    create table alunos(
    rgm int not null auto_increment primary key, 
    nome varchar(200) not null, 
    usuario varchar(20) not null unique, 
    senha varchar(20) not null,
    email varchar(200),
    data_nascimento date not null
);

describe alunos; -- descreve a tabela que você fez
select * from alunos; -- * é uma consulta com todos os campos, mostre todos os campos da tabela alunos 

-- a ordem que voce chamar é a ordem que voce cadastra
insert into alunos(rgm, nome, usuario, senha, email, data_nascimento) 
values(null, 'Diego', 'diego123', 'diegoabc', 'diego@diego.com', '2002-07-05' );

drop table alunos; -- apaga a tabela

select nome, email from alunos; -- comando select vai consultar o banco

select * from alunos where rgm = 1; 

select * from alunos where usuario ='diego123' and senha = 'diegoabc'; 

select * from alunos where usuario like '%diego%';

update alunos set email = 'novoe-mail@email.com' where rgm= 1;
-- NUNCA UTILIZAR UPDATE OU DELETE SEM WHERE!
delete from alunos where rgm=1; 









