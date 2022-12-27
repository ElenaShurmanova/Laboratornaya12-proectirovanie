<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Лабораторная работа №12</title>
</head>
<body>
</body>
<?php
    // интерфейс "продукт"
    interface Product{
        public function Info();
    }

    // класс "шоколад"
    class Chocolate implements Product{
        public $chocolate, $price, $rating;

        function __construct($chocolate, $price, $rating){
            $this->chocolate=$chocolate; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }
        
        function Info(){
            echo "Шоколад: ".$this->chocolate." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }
    
    // класс "мастика"
    class Mastic implements Product{
        public $mastic, $price, $rating;

        function __construct($mastic, $price, $rating){
            $this->mastic=$mastic; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }

        function Info(){
            echo "Мастика: ".$this->mastic." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }
    
    // класс "вишня"
    class Сherry implements Product{
        public $cherry, $price, $rating;

        function __construct($cherry, $price, $rating){
            $this->cherry=$cherry; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }

        function Info(){
            echo "Вишня: ".$this->cherry." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }

    // интерфейс "пользователь"
    interface User{
        public function userInfo();
    }
    
    // класс "пользователь 1"
    class User1 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "пользователь 2"
    class User2 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "пользователь 3"
    class User3 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "подведение итогов"
    class Summarizing implements Product, User{
        public $username, $video, $photo, $screen;

        function __construct($username, $commodity){
            $this->username=$username;
            $this->commodity=$commodity;
        }

        function Info(){
            echo  "Пользователь: ".$this->username." купил: ".$this->commodity."<br>"; 
        }

        function userInfo(){
            echo "da";
        }
    }
    
    // заполнение данных о товарах
    $result1 = new Chocolate("Milka", "120", "4.3 / 5.0");
    $result1->Info();

    $result2 = new Mastic("Mastic super","300","4.2/ 5.0");
    $result2->Info();

    $result3 = new Сherry("Screen_1", "185", "5.0 / 5.0");
    $result3->Info();

    $us1 = new User1("Tom", "All", "1234");
    $us1->userInfo();

    $us2 = new User2("Sam","Robert","super");
    $us2->userInfo();

    $us3 = new User3("Bob","Josef","Cook");
    $us3->userInfo();

    $resInfo = new Summarizing("Sam", "Сherry");
    $resInfo->Info();
?>
</html>
