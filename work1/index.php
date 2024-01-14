<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0</td>
            <td>0</td>
            <td>
                <?php
                    $A = 0;
                    $B = 0;
                    echo !$A
                ?>
            </td>
            <td>
                <?php
                    echo $A || $B
                ?>
            </td>
            <td>
                <?php
                    echo $A && $B
                ?>
            </td>
            <td>
                <?php
                    echo $A xor $B
                ?>
            </td>
          </tr>
          <tr>
            <td>0</td>
            <td>1</td>
            <td>
                <?php
                    $A = 0;
                    $B = 1;
                    echo !$A
                ?>
            </td>
            <td>
                <?php
                    echo $A || $B
                ?>
            </td>
            <td>
                <?php
                    echo $A && $B
                ?>
            </td>
            <td>
                <?php
                    echo $A xor $B
                ?>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
            <td>
                <?php
                    $A = 1;
                    $B = 0;
                    echo !$A
                ?>
            </td>
            <td>
                <?php
                    echo $A || $B
                ?>
            </td>
            <td>
                <?php
                    echo $A && $B
                ?>
            </td>
            <td>
                <?php
                    echo $A xor $B
                ?>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>
                <?php
                    $A = 1;
                    $B = 1;
                    echo !$A
                ?>
            </td>
            <td>
                <?php
                    echo $A || $B
                ?>
            </td>
            <td>
                <?php
                    echo $A && $B
                ?>
            </td>
            <td>
                <?php
                    echo $A xor $B
                ?>
            </td>
          </tr>
        </tbody>
      </table>
      
</body>
</html>