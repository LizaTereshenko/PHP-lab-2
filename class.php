<?php
class Users
{
    protected $name;
    protected $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

}

class Admin extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте админ ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте делать всё.';
        include "admin.php";
    }
}

class Client extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте клиент ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте просматривать информацию доступную пользователям.';
        include "client.php";
    }
}

class Manager extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте менеджер ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте изменять, удалять и создавать клиентов.';
       include "manager.php";
    }
}
