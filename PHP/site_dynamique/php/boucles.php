<?php

/*-----------------------------------IF ELSE ELSEIF--------------*/
$age = 17;

if ($age < 18) {
    echo "rentre chez toi";
} elseif ($age < 34) {
    echo "viens faire la fête";
} else {
    echo "trop vieux";
}


/*--------------------------------------------SWITCH ---------*/

switch ($page) {
    case 'home':
        echo "Affiche page home";
        break;
    case 'blog':
        echo "Affiche page blog";
        break;
    case 'restaurant':
        echo "Affiche la page restaurant";
        break;
    default;
        echo "Affiche la page home";
}

/*--------------------------------------------FOR-----------------*/
?>
<table>
    <tr>
        <th>X</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <?php for ($j = 1; $j <= 10; $j++) : ?>

        <tr>
            <th><?php echo $j; ?></th>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <td><?php echo $i * $j; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<br>
<br>
<table>
    <tr>
        <th>X</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <?php for ($j = 1; $j <= 10; $j++) {
        echo "<tr>";
        echo "<th>" . $j . "</th>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>" . $i * $j ."</td>";
        }
    }

    ?>
</table>
<?php
/*-----------------------------WHILE------------------------------*/

 $tours = 0;
while($tours<=10){
    echo "tours $tours  </br>";
    $tours++;
}

?>