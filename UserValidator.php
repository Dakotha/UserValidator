<?php

class UserValidator
{
    // Metoda walidująca adres email.
    public function validateEmail(string $email): bool
    {
        // Adres email musi zawierać znak @, przed @ powinna być co najmniej
        // jedna litera, a po @ powinna być domena (np. example.com), która zawiera kropkę (.)
        // i co najmniej dwie litery po kropce.
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        // Rzutuję wynik na typ logiczny i zwracam true jeśli email pasuje do wyrażenia regularnego.
        return (bool)preg_match($pattern, $email);
    }

    // Metoda walidująca hasło.
    // Hasło musi zawierać co najmniej 8 znaków,
    // musi zawierać co najmniej jedną dużą literę, jedną małą literę, jedną cyfrę oraz
    // jeden znak specjalny (np. !, @, #, etc.).
    public function validatePassword(string $password): bool
    {
        // Sprawdzam długości hasła.
        if (strlen($password) < 8) {
            return false;
        }

        // Sprawdzam czy hasło zawiera co najmniej jedną dużą literę.
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        // Sprawdzam czy hasło zawiera co najmniej jedną małą literę.
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }

        // Sprawdzam czy hasło zawiera co najmniej jedną cyfrę.
        if (!preg_match('/\d/', $password)) {
            return false;
        }

        // Sprawdzam czy hasło zawiera co najmniej jeden znak specjalny;
        if (!preg_match('/[\W_]/', $password)) {
            return false;
        }

        // Jeśli wszystkie warunki są spełnione, hasło jest poprawne i zwracam true.
        return true;
    }
}


// ****************************
// Przykładowe użycie klasy
// ****************************

// $validator = new UserValidator();

// $email = "test@example.com";
// $password = "StrongPass1!";

// if ($validator->validateEmail($email)) {
//     echo "Email is valid.\n";
// } else {
//     echo "Email is invalid.\n";
// }

// if ($validator->validatePassword($password)) {
//     echo "Password is valid.\n";
// } else {
//     echo "Password is invalid.\n";
// }
