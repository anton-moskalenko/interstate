create table rune_topics
(
    key_topic bigint unsigned auto_increment,
    uid timestamp not null,
    title varchar(250) not null,
    program text not null,
    status tinyint unsigned default 1 not null,
    url varchar(1000) not null,
    tags varchar(100) not null,
    data json not null,
    constraint rune_topics_pk
        primary key (key_topic)
);

