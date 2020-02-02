CREATE DATABASE HotelManagement;

CREATE TABLE customer ( 
    id             SERIAL        NOT NULL PRIMARY KEY
,   first_name     VARCHAR(50)   NOT NULL
,   last_name      VARCHAR(50)   NOT NULL
,   phone          VARCHAR(100)  NOT NULL
,   valid_id       VARCHAR(100)  NOT NULL UNIQUE
);

CREATE TABLE roomType (
    id             SERIAL        NOT NULL PRIMARY KEY
,   price          INT           NOT NULL        
);

CREATE TABLE room (
    id             SERIAL        NOT NULL PRIMARY KEY
,   is_occupied    BOOLEAN       NOT NULL
,   number         INT           NOT NULL UNIQUE
,   room_type      VARCHAR(50)   NOT NULL REFERENCES roomType(id)
);

CREATE TABLE reservation (
    id             SERIAL      NOT NULL PRIMARY KEY
,   check_in_date  DATE        NOT NULL
,   check_out_date DATE        NOT NULL
,   CHECK (check_out_date > check_in_date)
,   customer_id    INT         NOT NULL REFERENCES customer(id)
,   room_id        INT         NOT NULL REFERENCES room(id)   
);

CREATE TABLE parking (
    id             SERIAL      NOT NULL PRIMARY KEY
,   made           VARCHAR(50) NOT NULL
,   year           INT         NOT NULL
,   license_plate  VARCHAR(50) NOT NULL
,   customer_id    INT         NOT NULL REFERENCES customer(id)
);


