<!DOCTYPE html>
<html>
    <head>
        <title>Table database ustad</title>
        <style type="text/css">
            table {
                border-collapse: : collapse;
                width: 100%;
                color: #d96459;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th{
                background-color: #d96459;
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>nama</th>
                <th>umur</th>
                <th>alamat</th>
                <th>pendidikan</th>
                <th>pengalaman</th>
                <th>jadwal</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "yukngajis");
                if ($conn-> connect_error){
                    die("Connection failed:". $conn-> connect_error);
                }

                $sql = "SELECT id, name, umur, alamat, pendidikan, pengalaman, jadwal FROM ustad";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["id"] ."</td><td>". $row["name"]. "</td><td>". $row["umur"]. "</td><td>". $row["alamat"]. "</td><td>". $row["pendidikan"]. "</td><td>". $row["pengalaman"]. "</td><td>". $row["jadwal"]. "</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                
                $conn-> close()
            ?>
        </table>
    </body>
</html>