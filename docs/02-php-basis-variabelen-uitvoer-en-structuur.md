# 02. PHP-basis: variabelen, uitvoer en structuur

## Wat je leert
Je gebruikt variabelen, conditionele code, arrays en includes om herhaling te vermijden.

## Kernbegrippen
- variabelen
- arrays
- include
- template

## Theorie in het kort
Lees dit deel eerst. De theorie is beperkt tot wat je nodig hebt om de praktijkstappen te begrijpen. Noteer onbekende woorden in je begrippenlijst.

## Stap voor stap
![Codevoorbeeld](../assets/screenshots/02_code.png)

![Browserresultaat](../assets/screenshots/02_browser.png)

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
$pageTitle = 'Producten';
$products = ['Boek', 'Ticket', 'Workshop'];
include __DIR__ . '/partials/header.php';
?>
<h1><?= htmlspecialchars($pageTitle) ?></h1>
<ul>
<?php foreach ($products as $product): ?>
  <li><?= htmlspecialchars($product) ?></li>
<?php endforeach; ?>
</ul>
<?php include __DIR__ . '/partials/footer.php'; ?>
```

## Oefeningen
1. Basis: Splits een pagina op in header, inhoud en footer.
2. Verdieping: voeg een extra foutcontrole of uitbreiding toe.
3. Reflectie: leg in maximaal vijf zinnen uit hoe de server, PHP en de browser samenwerken in deze oefening.
