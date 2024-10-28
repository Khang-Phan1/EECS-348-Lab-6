<html>
    <head>
        <h1>Practice 4</h1>
    </head>

    <body>
        <div>
            <p>
                <form method=get>
                    number of rows: <input type=text name=size><br>
                    <input type=submit value="Submit">
                </form>
            </p>
        </div>
    </body>
</html>

<?php
if (isset($_GET["size"])) {
    $size = intval($_GET["size"]);
    echo "<table border='2' cellspacing='2'>";
    
    echo "<tr><th>1</th>";
    for ($i = 1; $i <= $size; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";

        for ($j = 1; $j <= $size; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>