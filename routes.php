<?php

use Hilafothi\FileSystem\Publication;
use Hilafothi\FileSystem\FileSystem;

Flight::route('/r/@slug', function ($slug) {

    $file = new FileSystem(__DIR__ . "/storage");
    $data = $file->find($slug . ".json");

    Flight::render('show', [
        "title" =>  $data->getTitle(),
        "author" => $data->getAuthor(),
        "date" => $data->getPublishedDate(),
        "content" => $data->getContent(),

        "meta_title" => $data->getPublishedDate()
    ], 'content');

    Flight::render('layout');
});


Flight::route('GET /new', function () {

    Flight::render('create', [
        "meta_title" => "Create a publication"
    ], 'content');

    Flight::render('layout');
});


Flight::route('POST /new', function () {
    $request = Flight::request();

    $pub = new Publication();

    $pub
        ->setTitle($request->data->title)
        ->setAuthor($request->data->author)
        ->setPublishedDate(date("Y-m-d-H-m-s"))
        ->setContent($request->data->content);

    $file = new FileSystem(__DIR__ . "/storage");

    $new_file = $file->create($pub);

    echo $new_file;
});
