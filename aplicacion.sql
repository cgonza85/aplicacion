CREATE TABLE categoria (
  id SERIAL,
  nombre VARCHAR(255) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE producto (
  id SERIAL,
  categoria_id INTEGER NOT NULL REFERENCES categoria(id),
  nombre VARCHAR(255) NULL,
  marca VARCHAR(255) NULL,
  PRIMARY KEY(id)
);
