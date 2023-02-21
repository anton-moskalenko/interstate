create table interstate_points
(
    key_point timestamp not null,
    title varchar(250) not null,
    program text not null,
    tags varchar(100) not null,
    data json not null,
    constraint interstate_points_pk
        primary key (key_point)
);

