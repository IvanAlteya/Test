<?php
 if (isset($_POST['submit'])) {
     $connection = new mysqli( $host="localhost", $username="root", $passwd="", $dbname="alteyadb");
     $q = $connection->real_escape_string($_POST['q']);
     $column = $connection->real_escape_string($_POST['column']);

     if ($column == "" || ($column != "ProductNameEnglish" && $column != "ProductNameBulgarian"))
        $column ="ProductNameEnglish";

     $sql = $connection->query( $query="SELECT ProductNameEnglish FROM productinfo WERE $column LIKE '%$q%'");
      if ($sql->num_rows > 0) {
            while ($data = $sql->fetch_array())
                echo $data['ProductNameEnglish'] . "<br>";
      } else
            echo "Your Search queary doesen't match any data!";   
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
            </select>
        <input type="submit" name="submit" value="Find">
    </form>
</body>
</html>
