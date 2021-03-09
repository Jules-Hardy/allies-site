<?php
echo "Bonjour le monde";

// Si vous n'utilisez pas d'autres caractères,
// vous pouvez afficher plusieurs variables
// en les séparant par des virgules
echo $foo;          // foobar
echo $foo,$bar;     // foobarbarbaz

// Les chaînes peuvent être passées individuellement comme arguments multiples ou
// concaténées et passées comme un seul argument
echo 'Cette ', 'chaîne ', 'a été ', 'faite ', 'avec plusieurs paramètres.', chr(10);
echo 'Cette ' . 'chaîne ' . 'a été ' . 'faite ' . 'à l\'aide de la concaténation.' . "\n";

// Parce que echo() ne se comporte pas comme une fonction, le code suivant est invalide.
($some_var) ? echo 'true' : echo 'false';

// Cependant, les exemples suivants sont valides :
($some_var) ? print 'Oui' : print 'Non'; // print est aussi une structure de langage,
                                         // mais il se comporte comme une fonction, donc,
                                         // il peut être utilisé dans ce contexte.

echo $some_var ? 'Oui': 'Non'; // échanger la déclaration
?>
