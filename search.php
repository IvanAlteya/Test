<?php
 if (isset($_POST['submit'])) {
     $connection = new mysqli( $host="localhost", $username="root", $passwd="", $dbname="alteyadb");
     $q = $connection->real_escape_string($_POST['q']);
     $column = $connection->real_escape_string($_POST['column']);
     if ($column == "" || ($column != "ProductNameEnglish" && $column != "ProductNameBulgarian" && $column != "SKUBG"))
        $column ="ProductNameEnglish";

     $sql = $connection->query("SELECT ProductNameEnglish, ProductNameBulgarian, SKUBG FROM productinfo2 WHERE $column LIKE '%$q%'");
      if ($sql->num_rows > 0) {
            while ($data = $sql->fetch_array())
                echo $data['ProductNameEnglish'] . "<br>";
                echo $data['ProductNameBulgarian'] . "<br>";
                echo $data['SKUBG'] . "<br>";
      } else
            echo "Your Search query doesen't match any data!";   
 }
?>
<html>
    <head>
        <title> PHP Search Form </title>
    </head>
<body>
    <form method='post' action="search.php">
        <input type="text" name="q" placeholder="Search Query...">
            <select name="column">
                <option value="">Select Filter</option>
                <option value="ProductNameEnglish">Product Name English</option>
                <option value="ProductNameBulgarian">Product Name Bulgarian</option>
                <option value="SKUBG">SKU BG</option>
            </select>
        <input type="submit" name="submit" value="Find">
    </form>
</body>
</html>
