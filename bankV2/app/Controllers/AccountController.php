<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;

class AccountController
{
    public function index()
    {
        $data = new FileWriter('account');

        return App::view('account/index', [
            'pageTitle' => 'accounts',
            'accounts' => $data->showAll(),
        ]);
    }

    public function create()
    {
        return App::view('account/create', [
            'pageTitle' => 'create account',
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('account');
        $data->create($request);

        header('Location: /account');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('account');
        $account = $data->show($id);

        return App::view('account/edit', [
            'pageTitle' => 'edit account',
            'account' => $account,
        ]);
    }

    public function update(int $id, array $request)
    {
        $data = new FileWriter('account');
        $data->update($id, $request);

        header('Location: /account');
    }

    public function delete(int $id)
    {
        $account = (new FileWriter('account'))->show($id);
        return App::view('account/delete', [
            'pageTitle' => 'delete account',
            'account' => $account,
        ]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('account');
        $data->delete($id);

        header('Location: /account');
    }





}