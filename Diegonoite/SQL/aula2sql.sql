create database aulaphpquarta;
show databases;
use aulaphpquarta;
create table usuarios(
	id_usuario int not null auto_increment primary key,
    nome_usuario varchar(200),
    usuario varchar(50) unique,
    senha varchar(10),
    email varchar(200),
    cpf char(11),
    dt_nascimento date,
    tipo_usuario varchar(10),
    status char(1)
);


select * from usuarios;
-- descreve os campos da tabela usuarios 
desc usuarios; 

insert into usuarios(id_usuario, nome_usuario, usuario, senha, email, cpf, dt_nascimento, tipo_usuario, status) 
		values(null,'Pedro Henrique','pedroh','123456','pedh@unicid.edu.br','12345678912','2023-10-16','admin','a');
        
select nome_usuario, usuario, senha from usuarios;

select * from usuarios where id_usuario = 1;

select nome_usuario from usuarios 
where usuario='pauloh' and senha='123456';