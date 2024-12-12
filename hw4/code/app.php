<?php
/*
docker build -t hw4 .

//Выполнить только для первоначального формирования composer.json при создании проекта
//docker run --rm -v ${pwd}/code/:/code/ hw4 composer init ()

docker run --rm -v ${pwd}/code/:/code/ hw4 composer install
docker run --rm -v ${pwd}/code/:/code/ hw4 composer dump-autoload

docker run --rm -v ${pwd}/code/:/code/ hw4 php app.php
*/
require_once('vendor/autoload.php');

echo "Поехали!" . PHP_EOL;

$book1 = new Book(1, "Book1", ["Ivanov", "Petrov"], 2001, true, "adress");
$book2 = new Book(2, "Book2", ["Ivanov", "Petrov", "Author"], 2004, true, "adress");
$book3 = new Book(3, "Book3", ["Ivanov",  "Author"], 2005, true, "adress");

$ebook1 = new Ebook(5, "Book5", ["Ivanov",  "Author"], 2007, true, "www");

$bookcase1 = new Bookcase(1, [$book1, $book2, $book3,]);

$room1 = new Room(1, [$bookcase1]);

function testFunction(int $cmdNum): void
{
  echo PHP_EOL . "Команды $cmdNum: " .  PHP_EOL;
}

testFunction(1);
$book2->showTakenTimes();
$book1->takeBook();
$book2->takeBook();
$book2->takeBook();
$book2->showTakenTimes();


testFunction(2);
$book1->returnBook();
$book2->returnBook();
$book2->returnBook();


testFunction(3);
$book2->takeBook();
$bookcase1->showAllBooks();

testFunction(4);
$book3->takeBookMethod();
$ebook1->takeBookMethod();

testFunction(5);
class A {
  public function foo() {
  static $x = 0;
  echo ++$x;
  }
  }
  $a1 = new A();
  $a2 = new A();
  $a1->foo();
  $a2->foo();
  $a1->foo();
  $a2->foo();
/*
  Код выведет "1234". Переменная $x статическая и доступна во всех экземпрлярах класса. При изменении данной переменной в одном из экземпляров класса, она меняется во всех экземплярах класса.
*/


testFunction(6);
class C {
  public function foo() {
  static $x = 0;
  echo ++$x;
  }
  }
  class D extends C {
  }
  $a1 = new C();
  $b1 = new D();
  $a1->foo();
  $b1->foo();
  $a1->foo();
  $b1->foo();
  /*
  Код выведет то же, что и в предыдущем случае ("1234"). В данном случае при наследовании класса передаются все переменные и методы родительского класса. Соответственно вызов метода из дочернего класса аналогичен вызову метода из родительского класса.
*/
