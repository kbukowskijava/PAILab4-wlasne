<?php
include 'constants.php'; // Załadowanie stałych aplikacji
spl_autoload_register('classLoader'); // Automatyczne załadowanie klas aplikacji
session_start();
try {
    $portal = new PortalFront("localhost", "root", "", "bookstore");
    $action = 'showMain';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    $komunikat = $portal->getMessage();
    if (!$komunikat && $action == 'showLoginForm') {
        $komunikat = 'Wprowadź nazwę i hasło użytkownika';
    }
    switch ($action) { // Obsługa wykonywanych akcji
        case 'login': // Obsługa logowania
            break;
        case 'logout': // Obsługa wylogowania
            break;
        case 'registerUser': // Obsługa rejestracji użytkownika
            break;
        case 'addToBasket': // Dodawanie książki do koszyka
            break;
        case 'modifyBasket': // Modyfikacja zawartości koszyka
            break;
        case 'saveOrder': // Zapis zamówienia w bazie danych
            break;
        default:
            include 'templates/mainTemplate.php';
    }
} catch (Exception $e) {
    echo 'Błąd: ' . $e->getMessage() . '<br>';
    exit('Portal chwilowo niedostępny');
}
// Funkcja ładująca zdefiniowane klasy umieszczone w katalogu 'klasy'
function classLoader($nazwa)
{
    if (file_exists("klasy/$nazwa.php")) {
        require_once("klasy/$nazwa.php");
    } else {
        throw new Exception("Brak pliku z definicją klasy.");
    }
}
