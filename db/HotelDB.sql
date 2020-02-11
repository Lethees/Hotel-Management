DROP TABLE IF EXISTS parking;
DROP TABLE IF EXISTS reservation;
DROP TABLE IF EXISTS roomType;
DROP TABLE IF EXISTS room;
DROP TABLE IF EXISTS customer;


CREATE TABLE customer ( 
    id             SERIAL        NOT NULL PRIMARY KEY
,   first_name     VARCHAR(50)   NOT NULL
,   last_name      VARCHAR(50)   NOT NULL
,   phone          VARCHAR(100)  NOT NULL
,   valid_id       VARCHAR(100)  NOT NULL UNIQUE
);

CREATE TABLE room (
    id             SERIAL        NOT NULL PRIMARY KEY
,   is_occupied    BOOLEAN       NOT NULL
,   number         INT           NOT NULL UNIQUE
);

CREATE TABLE roomType (
    id             SERIAL        NOT NULL PRIMARY KEY
,   price          INT           NOT NULL
,   room_type      VARCHAR(50)   NOT NULL 
,   number         INT           NOT NULL UNIQUE REFERENCES room(number)
,   description    VARCHAR(3000) NOT NULL               
);

CREATE TABLE reservation (
    id             SERIAL      NOT NULL PRIMARY KEY
,   check_in_date  DATE        NOT NULL
,   check_out_date DATE        NOT NULL
,   CHECK (check_out_date > check_in_date)
,   customer_id    INT         NOT NULL REFERENCES customer(id)
,   room_number    INT         NOT NULL REFERENCES room(number)   
);

CREATE TABLE parking (
    id             SERIAL      NOT NULL PRIMARY KEY
,   make           VARCHAR(50) NOT NULL
,   model          VARCHAR(50) NOT NULL
,   year           INT         NOT NULL
,   license_plate  VARCHAR(50) NOT NULL
,   customer_id    INT         NOT NULL REFERENCES customer(id)
);

INSERT INTO    customer ( first_name
                        , last_name
                        , phone
                        , valid_id) 
                 VALUES ( 'James'
                        , 'Smith'
                        , '205-244-4410'
                        , 'I2139KJJK');

INSERT INTO    customer ( first_name
                        , last_name
                        , phone
                        , valid_id) 
                 VALUES ( 'John'
                        , 'Smith'
                        , '208-544-8470'
                        , 'CD9UJJ12K');

INSERT INTO    customer ( first_name
                        , last_name
                        , phone
                        , valid_id) 
                 VALUES ( 'Audery'
                        , 'Henderson'
                        , '202-595-4442'
                        , 'WSD11JJWA');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '201');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '202');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '203');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '204');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '205');
                    
INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '206');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '207');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '208');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '209');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '210');

INSERT INTO        room ( is_occupied
                        , number) 
                 VALUES ( False
                        , '211');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '201'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '202'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '203'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '204'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '205'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '79'
                        , 'King'
                        , '206'
                        , 'A room with a king-sized bed. May be occupied by one or more people.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '85'
                        , 'Queen'
                        , '207'
                        , 'A Room with two queen beds.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '85'
                        , 'Queen'
                        , '208'
                        , 'A Room with two queen beds.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '85'
                        , 'Queen'
                        , '209'
                        , 'A Room with two queen beds.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '85'
                        , 'Queen'
                        , '210'
                        , 'A Room with two queen beds.');

INSERT INTO    roomType ( price
                        , room_type
                        , number
                        , description) 
                 VALUES ( '85'
                        , 'Queen'
                        , '211'
                        , 'A Room with two queen beds.');

INSERT INTO    reservation ( check_in_date
                           , check_out_date
                           , customer_id
                           , room_number) 
                 VALUES    ( '2020-02-01'
                           , '2020-02-03'
                           , 1
                           , '201');

INSERT INTO    reservation ( check_in_date
                           , check_out_date
                           , customer_id
                           , room_number) 
                 VALUES    ( '2020-02-01'
                           , '2020-02-05'
                           , 2
                           , '202');

INSERT INTO    reservation ( check_in_date
                           , check_out_date
                           , customer_id
                           , room_number) 
                 VALUES    ( '2020-01-31'
                           , '2020-02-02'
                           , 3
                           , '203');    

INSERT INTO    parking ( make
                       , model
                       , year
                       , license_plate
                       , customer_id) 
               VALUES  ( 'Ford'
                       , 'F-150'
                       , '2018'
                       , 'KINGOFTHEHILL'
                       , 1);     

INSERT INTO    parking ( make
                       , model
                       , year
                       , license_plate
                       , customer_id) 
               VALUES  ( 'Toyota'
                       , 'Camry'
                       , '2016'
                       , 'E C8866I'
                       , 2);   

INSERT INTO    parking ( make
                       , model
                       , year
                       , license_plate
                       , customer_id) 
               VALUES  ( 'Honda'
                       , 'Civic'
                       , '2019'
                       , 'VMX J1230SJ'
                       , 3);                          
