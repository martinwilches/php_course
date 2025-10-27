<?php

class User {
    // propiedades de la clase // atributos que pertenecen a la clase
    public $name;
    public $email;
    public $password;

    // metodo constructor // se ejecuta cada vez que se instancia un nuevo objeto
    function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // metodos // funciones que pertenecen a la clase
    function setName($name)
    {
        // $this // objeto actual que accede a la clase
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

// instancia de la clase
// $user1 = new User();

// las propiedades publicas de la clase pueden ser accedidas desde fuera de la misma
// $user1->name = 'Martin';
// $user1->setName('Martin');

// $user2 = new User();
// $user2->setName('Andrea'); // metodo setter
// echo $user2->getName(); // metodo getter

// el constructor se encarga de inicializar los valores de las propiedades de la clase
$user3 = new User('Ed', 'ed@gmail.com', '123');

/**********
 * Herencia
 * */

// Employe -> clase hija // User -> clase principal
class Employee extends User {
    public $title;

    function __construct($name, $email, $password, $title)
    {
        // heredar el metodo constructor de la clase principal
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
}

$employee = new Employee('Paola', 'paola@gmail.com', 123, 'Manager');
