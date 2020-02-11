CREATE DATABASE scripture;

CREATE scriptures(
    id      SERIAL INT NOT NULL PRIMARY KEY,
    book    VARCHAR(100)   NOT NULL,
    chapter INT            NOT NULL,
    verse   INT            NOT NULL,
    content VARCHAR(10000) NOT NULL
);

INSERT INTO scriptures (    
                            book,
                            chapter,
                            verse,
                            content
                       )
                VALUES (
                            'John',
                            '1',
                            '5',
                            'And the alight shineth in bdarkness; and the darkness ccomprehended it not.'
                       );

INSERT INTO scriptures (    
                            book,
                            chapter,
                            verse,
                            content
                        )
                VALUES (
                            'Doctrine and Covenants',
                            '88',
                            '49',
                            'The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.'
                       );

INSERT INTO scriptures (    
                            book,
                            chapter,
                            verse,
                            content
                        )
                VALUES (
                            'Doctrine and Covenants',
                            '93',
                            '28',
                            'He that akeepeth his commandments receiveth btruth and clight, until he is glorified in truth and dknoweth all things.'
                       );

INSERT INTO scriptures (    
                            book,
                            chapter,
                            verse,
                            content
                        )
                VALUES (
                            'Mosiah',
                            '16',
                            '9',
                            'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
                       );