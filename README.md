# UserValidator

## Zadanie rekrutacyjne

Twoim zadaniem jest stworzenie klasy w PHP 8.3, która będzie odpowiedzialna za walidację adresu e-mail oraz hasła.

Klasa ta powinna być napisana w czystym PHP, bez użycia jakichkolwiek frameworków. Mile widziane korzystanie z nowych funkcjonalności PHP 8.0 - 8.3.

### Wymagania

#### Klasa “UserValidator”

Klasa powinna zawierać dwie publiczne metody:

* validateEmail(string $email): bool
* validatePassword(string $password): bool

Obie metody powinny zwracać wartość true w przypadku poprawnej walidacji oraz false w przeciwnym razie.

#### Metoda “validateEmail”

Adres e-mail powinien być walidowany za pomocą wyrażenia regularnego. Prawidłowy adres e-mail musi spełniać podstawowe zasady:

* zawierać znak @,
* przed @ powinna być co najmniej jedna litera,
* po @ powinna być domena (np. example.com), która zawiera kropkę (.) i co najmniej dwie litery po kropce.

#### Metoda “validatePassword”

Hasło powinno spełniać następujące kryteria:

* musi zawierać co najmniej 8 znaków,
* musi zawierać co najmniej jedną dużą literę, jedną małą literę, jedną cyfrę oraz jeden znak specjalny (np. !, @, #, etc.),
* metoda powinna zwracać true, jeśli hasło spełnia wszystkie te kryteria.

### Przykład użycia
```
$validator = new UserValidator();

$email = "test@example.com";
$password = "StrongPass1!";

if ($validator->validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

if ($validator->validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}
```
