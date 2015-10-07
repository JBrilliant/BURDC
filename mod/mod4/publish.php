<!--<html>
<style type="text/css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</style>
<header class="header" id="head">
-->
<html>

<head>
<style type="text/css">
<>
<title>MySQL Table Viewer</title>
  <p><img src="img/RDC.png" width="285" height="203" alt=""/>Bicol University Research and Development Center</p>
</head>

<body>
    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pwd = '';
    $database = 'pec';
    $table = 'pec_tbl';

    if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

    if (!mysql_select_db($database))
    die("Can't select database");
    // sending query
    $result = mysql_query("SELECT * FROM {$table}");
    if (!$result) {
    die("Query to show fields from table failed");
    }

    $fields_num = mysql_num_fields($result);

    echo "<h1>Table: Completed Researches</h1>";
    echo "<table border='1'><tr>";
    // printing table headers
    for($i=0; $i<$fields_num; $i++)
    {
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
    }
    echo "</tr>\n";
    // printing table rows
    while($row = mysql_fetch_row($result))
    {
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
    }
    mysql_free_result($result);
    ?>
</body>
</html>