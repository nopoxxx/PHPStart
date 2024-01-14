<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th>==</th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>true</td>
            <td><?php
            echo true == true 
            ?></td>
            <td><?php
            echo true == false
            ?></td>
            <td><?php
            echo true == 1
            ?></td>
            <td><?php
            echo true == 0 
            ?></td>
            <td><?php
            echo true == -1 
            ?></td>
            <td><?php
            echo true == "1" 
            ?></td>
            <td><?php
            echo true == null 
            ?></td>
            <td><?php
            echo true == "php" 
            ?></td>
          </tr>
          <tr>
            <td>false</td>
            <td><?php
            echo false == true 
            ?></td>
            <td><?php
            echo false == false
            ?></td>
            <td><?php
            echo false == 1
            ?></td>
            <td><?php
            echo false == 0 
            ?></td>
            <td><?php
            echo false == -1 
            ?></td>
            <td><?php
            echo false == "1" 
            ?></td>
            <td><?php
            echo false == null 
            ?></td>
            <td><?php
            echo false == "php" 
            ?></td>
          </tr>
          <tr>
            <td>1</td>
            <td><?php
            echo 1 == true 
            ?></td>
            <td><?php
            echo 1 == false
            ?></td>
            <td><?php
            echo 1 == 1
            ?></td>
            <td><?php
            echo 1 == 0 
            ?></td>
            <td><?php
            echo 1 == -1 
            ?></td>
            <td><?php
            echo 1 == "1" 
            ?></td>
            <td><?php
            echo 1 == null 
            ?></td>
            <td><?php
            echo 1 == "php" 
            ?></td>
          </tr>
          <tr>
            <td>0</td>
            <td><?php
            echo 0 == true 
            ?></td>
            <td><?php
            echo 0 == false
            ?></td>
            <td><?php
            echo 0 == 1
            ?></td>
            <td><?php
            echo 0 == 0 
            ?></td>
            <td><?php
            echo 0 == -1 
            ?></td>
            <td><?php
            echo 0 == "1" 
            ?></td>
            <td><?php
            echo 0 == null 
            ?></td>
            <td><?php
            echo 0 == "php" 
            ?></td>
          </tr>
          <tr>
            <td>-1</td>
            <td><?php
            echo -1 == true 
            ?></td>
            <td><?php
            echo -1 == false
            ?></td>
            <td><?php
            echo -1 == 1
            ?></td>
            <td><?php
            echo -1 == 0 
            ?></td>
            <td><?php
            echo -1 == -1 
            ?></td>
            <td><?php
            echo -1 == "1" 
            ?></td>
            <td><?php
            echo -1 == null 
            ?></td>
            <td><?php
            echo -1 == "php" 
            ?></td>
          </tr>
          <tr>
            <td>"1"</td>
            <td><?php
            echo "1" == true 
            ?></td>
            <td><?php
            echo "1" == false
            ?></td>
            <td><?php
            echo "1" == 1
            ?></td>
            <td><?php
            echo "1" == 0 
            ?></td>
            <td><?php
            echo "1" == -1 
            ?></td>
            <td><?php
            echo "1" == "1" 
            ?></td>
            <td><?php
            echo "1" == null 
            ?></td>
            <td><?php
            echo "1" == "php" 
            ?></td>
          </tr>
          <tr>
            <td>null</td>
            <td><?php
            echo null == true 
            ?></td>
            <td><?php
            echo null == false
            ?></td>
            <td><?php
            echo null == 1
            ?></td>
            <td><?php
            echo null == 0 
            ?></td>
            <td><?php
            echo null == -1 
            ?></td>
            <td><?php
            echo null == "1" 
            ?></td>
            <td><?php
            echo null == null 
            ?></td>
            <td><?php
            echo null == "php" 
            ?></td>
          </tr>
          <tr>
            <td>"php"</td>
            <td><?php
            echo "php" == true 
            ?></td>
            <td><?php
            echo "php" == false
            ?></td>
            <td><?php
            echo "php" == 1
            ?></td>
            <td><?php
            echo "php" == 0 
            ?></td>
            <td><?php
            echo "php" == -1 
            ?></td>
            <td><?php
            echo "php" == "1" 
            ?></td>
            <td><?php
            echo "php" == null 
            ?></td>
            <td><?php
            echo "php" == "php" 
            ?></td>
          </tr>
        </tbody>
      </table>

      <table class="table">
        <thead>
          <tr>
            <th>===</th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>true</td>
            <td><?php
            echo true === true 
            ?></td>
            <td><?php
            echo true === false
            ?></td>
            <td><?php
            echo true === 1
            ?></td>
            <td><?php
            echo true === 0 
            ?></td>
            <td><?php
            echo true === -1 
            ?></td>
            <td><?php
            echo true === "1" 
            ?></td>
            <td><?php
            echo true === null 
            ?></td>
            <td><?php
            echo true === "php" 
            ?></td>
          </tr>
          <tr>
            <td>false</td>
            <td><?php
            echo false === true 
            ?></td>
            <td><?php
            echo false === false
            ?></td>
            <td><?php
            echo false === 1
            ?></td>
            <td><?php
            echo false === 0 
            ?></td>
            <td><?php
            echo false === -1 
            ?></td>
            <td><?php
            echo false === "1" 
            ?></td>
            <td><?php
            echo false === null 
            ?></td>
            <td><?php
            echo false === "php" 
            ?></td>
          </tr>
          <tr>
            <td>1</td>
            <td><?php
            echo 1 === true 
            ?></td>
            <td><?php
            echo 1 === false
            ?></td>
            <td><?php
            echo 1 === 1
            ?></td>
            <td><?php
            echo 1 === 0 
            ?></td>
            <td><?php
            echo 1 === -1 
            ?></td>
            <td><?php
            echo 1 === "1" 
            ?></td>
            <td><?php
            echo 1 === null 
            ?></td>
            <td><?php
            echo 1 === "php" 
            ?></td>
          </tr>
          <tr>
            <td>0</td>
            <td><?php
            echo 0 === true 
            ?></td>
            <td><?php
            echo 0 === false
            ?></td>
            <td><?php
            echo 0 === 1
            ?></td>
            <td><?php
            echo 0 === 0 
            ?></td>
            <td><?php
            echo 0 === -1 
            ?></td>
            <td><?php
            echo 0 === "1" 
            ?></td>
            <td><?php
            echo 0 === null 
            ?></td>
            <td><?php
            echo 0 === "php" 
            ?></td>
          </tr>
          <tr>
            <td>-1</td>
            <td><?php
            echo -1 === true 
            ?></td>
            <td><?php
            echo -1 === false
            ?></td>
            <td><?php
            echo -1 === 1
            ?></td>
            <td><?php
            echo -1 === 0 
            ?></td>
            <td><?php
            echo -1 === -1 
            ?></td>
            <td><?php
            echo -1 === "1" 
            ?></td>
            <td><?php
            echo -1 === null 
            ?></td>
            <td><?php
            echo -1 === "php" 
            ?></td>
          </tr>
          <tr>
            <td>"1"</td>
            <td><?php
            echo "1" === true 
            ?></td>
            <td><?php
            echo "1" === false
            ?></td>
            <td><?php
            echo "1" === 1
            ?></td>
            <td><?php
            echo "1" === 0 
            ?></td>
            <td><?php
            echo "1" === -1 
            ?></td>
            <td><?php
            echo "1" === "1" 
            ?></td>
            <td><?php
            echo "1" === null 
            ?></td>
            <td><?php
            echo "1" === "php" 
            ?></td>
          </tr>
          <tr>
            <td>null</td>
            <td><?php
            echo null === true 
            ?></td>
            <td><?php
            echo null === false
            ?></td>
            <td><?php
            echo null === 1
            ?></td>
            <td><?php
            echo null === 0 
            ?></td>
            <td><?php
            echo null === -1 
            ?></td>
            <td><?php
            echo null === "1" 
            ?></td>
            <td><?php
            echo null === null 
            ?></td>
            <td><?php
            echo null === "php" 
            ?></td>
          </tr>
          <tr>
            <td>"php"</td>
            <td><?php
            echo "php" === true 
            ?></td>
            <td><?php
            echo "php" === false
            ?></td>
            <td><?php
            echo "php" === 1
            ?></td>
            <td><?php
            echo "php" === 0 
            ?></td>
            <td><?php
            echo "php" === -1 
            ?></td>
            <td><?php
            echo "php" === "1" 
            ?></td>
            <td><?php
            echo "php" === null 
            ?></td>
            <td><?php
            echo "php" === "php" 
            ?></td>
          </tr>
        </tbody>
      </table>
      
      
</body>
</html>