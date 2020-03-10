<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM productinfo WHERE CONCAT( ProductNameEnglish, ProductNameBulgarian, SKUBG) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM productinfo";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect($host="localhost", $username="root", $passwd="", $dbname="alteyadb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="index.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="table.css"/>
    <script src="table.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="index.html"><H2>ALTEYA DB</H2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Add New Product <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search Product Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Database Sheets</a>
          </li>
        </ul>
        <span class="navbar-text">
          Ver 1.0
        </span>
      </div>
    </nav>
    <form action="search.php" method="post">
  <div class="searcharea"> 
    <div class="container">
        <div class="row">
          <div class="col-sm">
            <input type="submit" class="btn btn-primary btn-sm" value="Search" name="search" title="Search">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Value To Search" name="valueToSearch"><br>           
    </div>
    <div class="col-sm">
    <a href="#" title="Download in Excel"><img src="file.svg" wide="20px" Height="20px"> Download in Excel</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <a href="#" title="Download in PDF"><img src="pdf.svg" wide="20px" Height="20px"> Download in PDF</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">
          <!--Table head-->
          <thead>
             <tr>
      <th>English Name</th>
      <th>Bulgarian Name</th>
      <th>SKU - BG</th>
      <th>SKU - USA</th>
      <th>EAN/UPC</th>
      <th>KG</th>
      <th>ML</th>
      <th>Oz</th>
      <th>W</th>
      <th>H</th>
      <th>Short Decription EN</th>
      <th>Short Decription BG</th>
      <th>Short Decription ES</th>
      <th>Short Decription DE</th>
      <th>Decription EN</th>
      <th>Decription BG</th>
      <th>Decription ES</th>
      <th>Decription DE</th>
      <th>Directions EN</th>
      <th>Directions BG</th>
      <th>Directions ES</th>
      <th>Directions DE</th>
      <th>Ingredients EN</th>
      <th>Warnings EN</th>
      <th>Warnings BG</th>
      <th>Warnings ES</th>
      <th>Warnings DE</th>
      <th>How to Use EN</th>
      <th>How to Use BG</th>
      <th>How to Use ES</th>
      <th>How to Use DE</th>
    </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
          <?php while($row = mysqli_fetch_array($search_result)):?>
    <tr>
        <td><?php echo $row['ProductNameEnglish'];?></td>
        <td><?php echo $row['ProductNameBulgarian'];?></td>
        <td><?php echo $row['SKUBG'];?></td>.
        <td><?php echo $row['SKUUSA'];?></td>
        <td><?php echo $row['EANUPC'];?></td>
        <td><?php echo $row['KG'];?></td>
        <td><?php echo $row['ML'];?></td>
        <td><?php echo $row['OZ'];?></td>
        <td><?php echo $row['W'];?></td>
        <td><?php echo $row['H'];?></td>
        <td><?php echo $row['L'];?></td>
        <td><?php echo $row['ShortDescriptionsEN'];?></td>
        <td><?php echo $row['ShortDescriptionsBG'];?></td>
        <td><?php echo $row['ShortDescrioptionsES'];?></td>
        <td><?php echo $row['ShortDescriptionsDE'];?></td>
        <td><?php echo $row['DescriptionEN'];?></td>
        <td><?php echo $row['DescriptionBG'];?></td>
        <td><?php echo $row['DescriptionES'];?></td>
        <td><?php echo $row['DescriptionDE'];?></td>
        <td><?php echo $row['DirectionsEN'];?></td>
        <td><?php echo $row['DirectionsBG'];?></td>
        <td><?php echo $row['DirectionsES'];?></td>
        <td><?php echo $row['DirectionsDE'];?></td>
        <td><?php echo $row['IngredientsEN'];?></td>
        <td><?php echo $row['WarningsEN'];?></td>
        <td><?php echo $row['WarningsBG'];?></td>
        <td><?php echo $row['WarningsES'];?></td>
        <td><?php echo $row['WarningsDE'];?></td>
        <td><?php echo $row['HowToUseEN'];?></td>
        <td><?php echo $row['HowToUseBG'];?></td>
        <td><?php echo $row['HowToUseES'];?></td>
        <td><?php echo $row['HowToUseDE'];?></td>

    </tr>
    <?php endwhile;?>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>
<!--Section: Live preview-->
      </div>
      </div><br><br>
      </div>   
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>
