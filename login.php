<?php

$x = $_POST['login'];
$y = $_POST['password'];
include "usersarr.php";
include 'class.php';

if(!empty($x) && !empty($y))
{
        foreach ($arr as $user)
        {
            if ($x == $user['login'] && $y == $user['password'])
            {
                if($user['role'] =='admin'){
                    $admin = new Admin($user['name'], $user['surname']);
                    $admin->inmsg();
                    break;
                }elseif ($user['role'] == 'manager'){
                    $manager = new Manager($user['name'], $user['surname']);
                    $manager->inmsg();
                    break;
                }else{
                    $client = new Client($user['name'], $user['surname']);
                    $client->inmsg();
                    break;
                }
            }
            else{
                echo 'Неверный логин или пароль';
                header('Location: index.php');
            }
        }
}else{
    echo 'Неверный логин или пароль';
    header('Location: index.php');
}



