<?php

namespace App;

class Users extends MainController
{
    public function index()
    {
        $users = User::all();
        $data = ['users' => $users];
        $this->view->renderTwig('index', $data);
    }

    public function create()
    {
        $this->view->renderTwig('create');
    }

    public function store()
    {
        $user = new User();
        $user->name = strip_tags($_POST['name']);
        $user->save();
        $this->redirect('users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $data = ['user' => $user];
        $this->view->renderTwig('edit', $data);
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->name = strip_tags($_POST['name']);
        $user->save();
        $this->redirect('users/edit/'.$id);
    }

    public function updateBulk($id)
    {
        $user = User::find($id); //select where id=1 LIMIT 1
        //структура таблицы:
        //id, name, is_admin
        $user->update($_POST); //['name' => 'asd']

        $this->redirect('users/edit/'.$id);
    }

    public function destroy($id)
    {
        $user = User::find($id); //сначала получает данные
        $user->delete(); //потом удаляет, но данные сохраняются в пхп до конца сессии
        $this->redirect('users');

//        User::destroy($id); //сразу удаляет без вопросов
    }
}