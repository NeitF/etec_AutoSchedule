create database bdAutoSchedule;
use bdAutoSchedule;

create table tblMaterias(
materiaID int(11) not null primary key auto_increment,
materiaNome varchar(50) not null,
materiaDescricao varchar(100),
materiaTecnica varchar(1) not null,
materiaCor varchar(20) not null
);

create table tblTurma(
turmaNome varchar(10) not null,
turmaCodigo int(11) not null primary key
);

create table professores(
id int(11) not null primary key auto_increment,
profNome varchar(50) not null,
profCPF varchar(150) not null,
profMateria varchar(50) not null
);

create table tblNovaTabela(
id int(11) not null primary key auto_increment,
nome_tabela varchar(50) not null,
qtdeTurmas int(50) not null,
qtdeHorarios int(50) not null
);

create table usuario(
user_ID int(11)  not null primary key auto_increment,
cod_instituicao int(11) not null,
cod_usuario int(11) not null,
senha varchar(50) not null,
nome_usuario varchar(50) not null,
cargo varchar(50) not null
);


select * from tblMaterias;
select * from professores;
select * from tblTurma;
select * from tblNovaTabela;
insert into usuario (user_ID, cod_instituicao, cod_usuario, senha, nome_usuario, cargo) values(NULL, 10, 100, 2712, 'Neit', 'Admin');
insert into tblNovaTabela (id, nome_tabela, qtdeTurmas, qtdeHorarios) values (NULL, '3º MIA', 4, 4);

-- select * from usuario where cod_instituicao = 10 and cod_usuario = 100 and senha = 2712;

-- drop database bdautoschedule;













