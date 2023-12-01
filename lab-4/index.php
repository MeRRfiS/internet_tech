<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table {
      width: 50%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
  <title>Lab. 4</title>
</head>
<body>

  <?php
    $file = 'data.csv';

    if (file_exists($file)) {
      $csvData = array_map('str_getcsv', file($file));
      $headers = array_shift($csvData);
  ?>

  <table>
    <thead>
      <tr>
        <?php foreach ($headers as $header): ?>
          <th><?php echo htmlspecialchars($header); ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($csvData as $row):
        echo "<tr>";
          foreach ($row as $value):
            echo "<td>".htmlspecialchars($value)."</td>";
          endforeach;
        echo "</tr>";
      endforeach;
      ?>
    </tbody>
  </table>

  <?php
    } else {
      echo 'file node found';
    }
  ?>

</body>
</html>
