# 07. CRUD: records tonen, toevoegen, wijzigen en verwijderen

## Wat je leert
Je bouwt lijst-, detail-, create-, update- en delete-acties voor één entiteit.

## Kernbegrippen
- SELECT
- INSERT
- UPDATE
- DELETE

## Theorie in het kort
Lees dit deel eerst. De theorie is beperkt tot wat je nodig hebt om de praktijkstappen te begrijpen. Noteer onbekende woorden in je begrippenlijst.

## Stap voor stap
![Codevoorbeeld](../assets/screenshots/07_code.png)

![Browserresultaat](../assets/screenshots/07_browser.png)

1. Open het startbestand uit `snippets/`.
2. Typ de code niet blind over: markeer eerst wat je al begrijpt.
3. Pas één regel aan en test het resultaat in de browser.
4. Noteer de foutmelding als iets niet werkt.
5. Verbeter de code en commit je werk met een duidelijke boodschap.

## Invulopdracht
| Vraag | Antwoord |
|---|---|
| Welke bestanden heb je aangepast? |  |
| Welke foutmelding kreeg je eventueel? |  |
| Welke regel loste het probleem op? |  |
| Wat zou je volgende keer anders doen? |  |

## Codefragment
```php
<?php
require __DIR__ . '/../src/db.php';
$errors = [];
$name = trim($_POST['name'] ?? '');
$price = $_POST['price'] ?? '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($name === '') $errors[] = 'Naam is verplicht.';
    if (!is_numeric($price) || $price < 0) $errors[] = 'Prijs moet positief zijn.';
    if (!$errors) {
        $stmt = db()->prepare('INSERT INTO products (name, price) VALUES (:name, :price)');
        $stmt->execute(['name' => $name, 'price' => $price]);
        header('Location: products.php');
        exit;
    }
}
```

## Oefeningen
1. Basis: Bouw een beheerscherm voor producten.
2. Verdieping: voeg een extra foutcontrole of uitbreiding toe.
3. Reflectie: leg in maximaal vijf zinnen uit hoe de server, PHP en de browser samenwerken in deze oefening.
