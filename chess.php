<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess</title>
    <style>
        table{
border: 1px solid black;
/* border-spacing: 0px; */
        }
        td{
            border: 1px solid black;
            padding: 25px;
        }

        .bgcolor{
            background: black;

        }


    </style>
</head>
<body>
      <form action="" method="POST">
<input type="text" name="chess-box" placeholder="Enter the number">
<input type="submit" name="submit" value="submit value">
      </form>

      <br>

      <table>
        <?php

        if (isset($_POST['submit'])) 
        {
            $data = $_POST['chess-box'];

            for ($row = 1; $row <= $data; $row++) {
                echo "<tr>";

                for ($col = 1; $col <= $data; $col++) {
                    if (($row + $col) % 2 == 0) 
                    {
                        echo "<td class='bgcolor'> </td>";
                    } 
                    else 
                    {
                        echo "<td>  </td>";
                    }
                }
            }
           }

?>
      </table>
</body>
</html>