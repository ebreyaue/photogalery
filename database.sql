
-- fotoblog mysql_db Create by Emma, github.com/ebreyaue

CREATE USER 'aguacate'@'localhost' IDENTIFIED BY 'aguacate';
GRANT ALL PRIVILEGES ON *.* TO 'aguacate'@'localhost' REQUIRE NONE WITH GRANT OPTION 
MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;


CREATE DATABASE IF NOT EXISTS photogalery;
use photogalery;

CREATE TABLE post 
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    content TEXT NOT NULL,
    photo_id VARCHAR(100),
    date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
)

--INSERT INTO POST (title,content,photo_id) VALUES('publicacion_1','ejemplo_1','111111');