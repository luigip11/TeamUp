CREATE TABLE user (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    nome varchar(100) not null,
    cognome varchar(100) not null,
    email varchar(100) FOREIGN KEY not null,
    password varchar(100) not null,
    telefono varchar(50) null,
    foto longblob null,
    motivoIscrizione text null,
    );

INSERT INTO user (nome, cognome, username, password, telefono)
VALUES ('Luigi', 'P', 'luigi.p11@outlook.it', 'Admin', '3398565810');


CREATE TABLE `partecipazioni` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `id_team` int(11) NOT NULL REFERENCES team(id), 
  `id_user` int(11) NOT NULL REFERENCES users(id),
  `feedback` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;