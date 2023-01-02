
<?php
$resultat = "machin";
$test = "";
for ($i=1; $i<10; $i++) {
    $test = $test.$resultat;
}
$insec = 0;
$sec = 60*60*24*365;
$insec = $insec.$sec;


$tableau = ["rouge","bleu","vert","marron","rose"];
$tableau2 = ["rouge","bleu","vert","marron","dauphin","rose"];
$animaux = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron"
];
$animaux2 = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron",
    "requin"=>"blanc",
    "dingo"=>"brun",
    "autruche"=>"noir",
    "crocodile"=>"vert",
];
$animauxDangereux = ["hyene","autruche","cobra","requin","crocodile"];
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>le tire de l'exo</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi cumque delectus dolor eos facilis harum, impedit laborum magni nam necessitatibus, nobis officiis provident reiciendis rerum sit unde voluptas.</p>
    <p> <?php echo $test ?> </p>
<p> le nombre de seconde dans une année complete : <?php echo $insec ?> </p>

    <table class="table table-bordered border-primary">
        <tr>
            <th>couleur</th>
        </tr>
        <?php
        foreach ($tableau as $couleurs => $val) {
        echo "<tr><td>$val </td></tr>";
        }
        ?>
    </table>
    <table class="table table-bordered border-primary">
        <tr>
            <th>couleur</th>
        </tr>
        <?php
        foreach ($tableau2 as $couleurs => $val) {
            if (in_array($val, $tableau)){
            echo "<tr><td>$val</td></tr>";

            }
        }
        ?>
    </table>

    <table class="table table-bordered border-primary">
        <tr>
            <th> animaux</th>
            <th> couleur</th>
        </tr>
        <?php
        foreach ($animaux as $animal => $couleurs) {
            $animal = "<tr>

                    <td>$animal </td>
                    <td>$couleurs</td>
                    </tr>";
            echo $animal;

        }

        ?>

    </table>
    <table class="table table-bordered border-primary">
        <tr>
            <th>animal</th>
            <th>couleur</th>
        </tr>
        <?php
        foreach ($animaux2 as $animal => $couleurs) {
            if (in_array($animaux2, $animauxDangereux)){
                $test =  "<span class='badge text-bg-success'>vert</span>";
                }else{

                 $test =  "<span class='badge text-bg-danger'>rouge</span>";
                };
                $animal = "
<tr>

                    <td>$animal </td>
                    <td>$couleurs</td>
                    <td>$test</td>
                    </tr>";
                echo $animal;
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>