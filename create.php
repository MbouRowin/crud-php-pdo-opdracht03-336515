<?php

require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $bodemformaat = $_POST["bodemformaat"] ?? "";
    $saus = $_POST["saus"] ?? "";
    $pizzatopping = $_POST["pizzatopping"] ?? "";
    $kruiden = implode(", ", $_POST["kruiden"] ?? []);

    $stmt = $pdo->prepare("INSERT INTO pizza (bodemformaat, saus, pizzatopping, kruiden) VALUES (?, ?, ?, ?)");
    $stmt->bindValue(1, $bodemformaat);
    $stmt->bindValue(2, $saus);
    $stmt->bindValue(3, $pizzatopping);
    $stmt->bindValue(4, $kruiden);

    $stmt->execute();

    header("Refresh: 2; url=/");
    die("De pizza is aangemaakt.");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maak je eigen pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Maak je eigen pizza</h1>

        <form method="post">
            <div class="mb-3">
                <label for="bodemformaat" class="form-label">Bodemformaat</label>

                <select name="bodemformaat" id="bodemformaat" class="form-control">
                    <option>Maak je keuze</option>
                    <option value="20 cm">20 cm</option>
                    <option value="25 cm">25 cm</option>
                    <option value="30 cm">30 cm</option>
                    <option value="35 cm">35 cm</option>
                    <option value="40 cm">40 cm</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="saus" class="form-label">Saus</label>

                <select name="saus" id="saus" class="form-control">
                    <option>Maak je keuze</option>
                    <option value="Tomatensaus">Tomatensaus</option>
                    <option value="Extra tomatensaus">Extra tomatensaus</option>
                    <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                    <option value="BBQ saus">BBQ saus</option>
                    <option value="Creme fraiche">Creme fraiche</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="form-label">Pizzatopping</div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pizzatopping" value="Vegan" id="vegan">
                    <label class="form-check-label" for="vegan"> Vegan</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pizzatopping" value="Vegetarisch" id="vegetarisch">
                    <label class="form-check-label" for="vegetarisch"> Vegetarisch</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pizzatopping" value="Vlees" id="vlees">
                    <label class="form-check-label" for="vlees"> Vlees</label>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-label">Kruiden</div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kruiden[]" value="Peterselie" id="peterselie">
                    <label class="form-check-label" for="peterselie"> Peterselie</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kruiden[]" value="Oregano" id="oregano">
                    <label class="form-check-label" for="oregano"> Oregano</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kruiden[]" value="Chili flakes" id="chili-flakes">
                    <label class="form-check-label" for="chili-flakes"> Chili flakes</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kruiden[]" value="Zwarte peper" id="zwarte-peper">
                    <label class="form-check-label" for="zwarte-peper"> Zwarte peper</label>
                </div>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Bestel</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>