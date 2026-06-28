# 03. Formulieren verwerken met GET en POST

## Wat je leert
Je verwerkt invoer uit formulieren en kiest bewust tussen GET en POST.

## Kernbegrippen
- form action
- method
- $_GET
- $_POST

## Theorie in het kort
Lees dit deel eerst. De theorie is beperkt tot wat je nodig hebt om de praktijkstappen te begrijpen. Noteer onbekende woorden in je begrippenlijst.

## Stap voor stap
![Codevoorbeeld](../assets/screenshots/03_code.png)

![Browserresultaat](../assets/screenshots/03_browser.png)

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
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $name === '' ? 'Vul je naam in.' : 'Bedankt, ' . htmlspecialchars($name) . '!';
}
?>
<form method="post">
  <label>Naam <input name="name" value="<?= htmlspecialchars($name) ?>"></label>
  <label>E-mail <input name="email" value="<?= htmlspecialchars($email) ?>"></label>
  <button type="submit">Verstuur</button>
</form>
<p><?= $message ?></p>
```

## Oefeningen
1. Basis: Maak een contactformulier met naam, e-mail en bericht.
2. Verdieping: voeg een extra foutcontrole of uitbreiding toe.
3. Reflectie: leg in maximaal vijf zinnen uit hoe de server, PHP en de browser samenwerken in deze oefening.
