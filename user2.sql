CREATE TABLE IF NOT EXISTS 'user' (
  'id' INT NOT NULL,
  'nm_name' VARCHAR(100) NULL,
  'lastName' VARCHAR(100) NULL,
  'gender' VARCHAR(45) NULL,
  'street' VARCHAR(45) NULL,
  'city' VARCHAR(90) NULL,
  'state' VARCHAR(90) NULL,
  'code' VARCHAR(90) NULL,
  'blockid' TEXT NULL,
  PRIMARY KEY ('id'))
ENGINE = MariaDB;
