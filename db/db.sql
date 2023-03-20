CREATE TABLE user(
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    pwd VARCHAR(350) NOT NULL,
    isAdmin BOOLEAN NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE transaction_type(
    id INT NOT NULL AUTO_INCREMENT,
    transaction_onlineDate VARCHAR(50) NOT NULL,
    transaction_status VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE property(
    id INT NOT NULL AUTO_INCREMENT,
    property_description VARCHAR(900) NOT NULL,
    property_location VARCHAR(50) NOT NULL,
    property_area int NOT NULL,
    property_numberOfPieces int NOT NULL,
    property_distanceFromSea int,
    property_swimmingpool BOOLEAN NOT NULL, 
    property_seaView BOOLEAN NOT NULL,
    id_user int NOT NULL,
    id_transaction int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (id_transaction) REFERENCES transaction_type(id) ON DELETE CASCADE
);

CREATE TABLE picture(
    id INT NOT NULL AUTO_INCREMENT,
    id_property int NOT NULL,
    picture_description VARCHAR(150) NOT NULL,
    picture_url VARCHAR(150) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_property) REFERENCES property(id) ON DELETE CASCADE
);

CREATE TABLE sale(
    id INT NOT NULL AUTO_INCREMENT,
    id_transaction int NOT NULL,
    selling_price int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_transaction) REFERENCES transaction_type(id) ON DELETE CASCADE
);

CREATE TABLE rental(
    id INT NOT NULL AUTO_INCREMENT,
    id_transaction int NOT NULL,
    rent int NOT NULL,
    charges int NOT NULL,
    furnished BOOLEAN NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_transaction) REFERENCES transaction_type(id) ON DELETE CASCADE
);

CREATE TABLE house(
    id INT NOT NULL AUTO_INCREMENT,
    id_property int NOT NULL,
    garden BOOLEAN NOT NULL,
    bonus VARCHAR(300) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_property) REFERENCES property(id) ON DELETE CASCADE
);

CREATE TABLE apartment(
    id INT NOT NULL AUTO_INCREMENT,
    id_property int NOT NULL,
    parking BOOLEAN NOT NULL,
    floor int NOT NULL,
    elevator BOOLEAN NOT NULL,
    caretaking BOOLEAN NOT NULL,
    balcony BOOLEAN NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_property) REFERENCES property(id) ON DELETE CASCADE
);

INSERT INTO user (firstname, lastname, email, pwd, isAdmin) VALUES
('Laurent', 'Dupont', 'l.dupont@yahoo.fr', '$2y$10$3IMmvGPvWq5FSHD6YtZCUOJAI8IV2h.ea0MbKeUbGE9fgtUsDyxPi', true),
('Simon', 'Berger', 's.berger@yahoo.fr', '$2y$10$w3gKCKic8J2UwL7FKgJraupobs5RIMpE3uK7Km3UCmS3MDBbZsD46', true),
('Yasmine', 'Radouani', 'y.radouani@yahoo.fr', '$2y$10$yS/CGYalG92hFgjtrWNiO.rN/cwRIrspRzRmrCD9ba7mu7B.36WpS', true);
