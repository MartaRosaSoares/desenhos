CREATE TABLE desenhos (
  id_desenhos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_desenhos VARCHAR(20) NULL,
  PRIMARY KEY(id_desenhos)
);

CREATE TABLE personagem (
  id_personagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  desenhos_id_desenhos INTEGER UNSIGNED NOT NULL,
  episodio INTEGER,
  nome_personagem VARCHAR(20) NULL,
  nome_criador VARCHAR(20) NULL,
  ano_desenho YEAR NULL,
  PRIMARY KEY(id_personagem),
  INDEX personagem_FKIndex1(desenhos_id_desenhos)
);