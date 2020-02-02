CREATE DATABASE conference;

CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
); 

CREATE TABLE public.conference(
    id SERIAL NOT NULL PRIMARY KEY,
    year INT NOT NULL,
    is_fall BOOLEAN NOT NULL
);

CREATE TABLE public.speaker(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(100) NOT NULL 
);


CREATE TABLE public.general note(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(id),
    speaker_id INT NOT NULL REFERENCES = public.speaker.(id),
    conference_id INT NOT NULL REFERENCES public.conference(id),
    conferecen_note TEXT NOT NULL
);