<!DOCTYPE html>
<html>
    <head>
        <title>PHP - MySQL - Select</title>
        <meta charset="UTF-8">
    </head>
<body>
<div class="container1">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Naujas
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lentele:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>
                            <input placeholder="Data" id="data">
                        </label>

                        <label>
                            <input placeholder="Numeris" id="numeris">
                        </label>

                        <label>
                            <input placeholder="Atstumas" id="atstumas">
                        </label>

                        <label>
                            <input placeholder="Laikas" id="laikas">
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Atšaukti</button>
                        <button id="hidesave" type="button" onclick="add()" class="btn btn-primary">Saugoti</button>
                        <button id="hideadd" type="button" onclick="save(index)" class="btn btn-primary">Taisyti</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <h3>Lentele:</h3>
<?php 

// Prisijungimo duomenys
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Prisijungiame prie duomenų bazės 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

// Suformuojame SELECT užklausą
$sql = 'SELECT id, number, distance/time*3.6 as speed, date FROM radars ORDER BY number, date DESC';

// Vykdome suformuotą užklausą duomenų bazėje
$result = $conn->query($sql);

// Tikriname ar rezultate yra bent viena eilutė
if ($result->num_rows > 0) { 
    ?>
        <table border=1>
            <tr>
                <th>id</th>
                <th>Numeris</th>
                <th>Data</th>
                <th>Greitis</th>
                <th>Veiksmas1</th>
                <th>Veiksmas2</th>
            </tr>
        
            <!-- einame cikle per visas rezultato eilutes ir jas išvedame --> 
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo round($row['speed']); ?></td> 
                    <td><a href="trinti.php?id=' + x.id + '">Trinti</a>
                    </td>
                    </tr>
                </tr>
            <?php } ?>

        </table>
    <?php
} else {
    echo 'nėra duomenų';
}
// uždarome prisijungimą prie DB
$conn->close();

?>
</body>
</html>