<?php

// Les différents articles sous forme d'objet
$dataArticlesList = [
    1 => new Article(
        'Lorem ipsum dolor sit amet.',
        'Qui nisi sequi ex odit harum est dolore repudiandae vel sint optio aut placeat natus non consequatur. Esse error aut minima molestiae qui perferendis quod ut consequatur distinctio ad facilis temporibus et reiciendis cupiditate in officia doloribus. At sequi pariatur est eaque aliquam aut voluptatem fugiat est error temporibus qui consectetur tenetur sed consequatur Quis. Sed laborum quae At odit corrupti et doloremque iure ut voluptate soluta est ullam nisi et voluptatum libero.',
        'Alexandre',
        '2017-07-13',
        'Pédiatrique'
    ),
    2 => new Article(
        'Nam quasi corporis ex animi suscipit 33 tempora beatae.',
        'Vel architecto eligendi ut incidunt quis et Quis internos aut ipsam voluptatem. Ut dolor dolores vel voluptatem eaque non soluta quisquam sit expedita alias. Et eligendi tempore et quisquam maiores ut odit temporibus!',
        'Julie',
        '2017-07-04',
        'Santé'
    ),
    3 => new Article(
        'Hic doloremque ipsa eos quos aperiam et nesciunt sunt rem ullam.',
        'Eum internos eaque aut expedita Quis et quasi internos quo sequi sequi aut officiis autem ab deleniti nihil.',
        'Lucie',
        '2017-06-19',
        'Actualité'
    ),
    4 => new Article(
        'Aut deleniti voluptatibus ad autem.',
        'Voluptatem ex fugiat voluptate in soluta repellendus. Et velit tenetur nam molestias possimus qui internos omnis et iusto quia non quis repellat.',
        'Xavier',
        '2017-05-06',
        'Médical'
    ),
    5 => new Article(
        'Et dignissimos vitae sit eveniet culpa qui quae laboriosam',
        'Quasi aspernatur sit iste debitis. Vel incidunt animi et ratione veniam qui quia suscipit id repellendus atque et voluptatem commodi et assumenda atque. Et accusantium sint ea ratione quia sit impedit quia aut sunt facilis ut omnis voluptatem qui voluptates ratione.',
        'Alexandre',
        '2018-06-12',
        'Actualité'

    ),
];


// [...]

// Les catégories
$dataCategoriesList = [
    // ID => objet Category
    1 => new Category('Pédiatrique'),
    2 => new Category('Santé'),
    3 => new Category('Médical'),
    4 => new Category('Actualité')
];

// Les auteurs
$dataAuthorsList = [
    // ID => objet Author
    1 => new Author('Maxime'),
    2 => new Author('Anthony'),
    3 => new Author('Alexandre'),
    4 => new Author('Dario'),
    5 => new Author('Julie'),
    6 => new Author('Lucie'),
    7 => new Author('Xavier')
];
