<?php

namespace Colors\Controllers;

use Colors\App;
use Colors\FileWriter;

class RacoonController
{
    public function index()
    {
        $data = new FileWriter('racoon');

        return App::view('racoon/index', [
            'pageTitle' => 'Racoons list',
            'racoons' => $data->showAll(),
        ]);
    }

    public function show(int $id)
    {
        echo '<h1>RacoonController</h1>';
        echo '<h2>show</h2>';
        echo '<p>id: ' . $id . '</p>';
    }
}