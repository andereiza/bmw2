CREATE USER 'webuser'@'localhost' IDENTIFIED BY 'Admin1234';
CREATE USER 'webadmin'@'localhost' IDENTIFIED BY 'Admin1234';
GRANT ALL PRIVILEGES ON * . * TO 'webadmin'@'localhost';
CREATE USER 'ander'@'localhost' IDENTIFIED BY 'Admin1234';
GRANT SELECT,insert ON * . * TO 'ander'@'localhost';
