<!-- Enable debug using ?debug=true" -->

<?php
include("db_config.php");
if (!$_SESSION["username"]){
    header('Location:login1.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Search Products - SQL Injection Training App</title>

    <link href="./css/htmlstyles.css" rel="stylesheet">
</head>

<body>
<div class="container-narrow">

    <div class="jumbotron">
        <p class="lead" style="color:white">
            Welcome <?php echo $_SESSION["username"]; ?>!! Search for products here</a>
        </p>
    </div>

    <div class="response">

        <p style="color:white">
        <table class="response">
            <form method="POST" autocomplete="off">

                <tr>
                    <td>
                        Search for a product:
                    </td>
                    <td>
                        <input type="text" id="searchitem" name="searchitem">&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="Search!"/>
                    </td>
                </tr>
        </table>

        </p>

        </form>
    </div>

    <br />
    <div class="searchheader" style="color:white">
        <table>

            <tr>
                <td style="width:50px " >
                    <b>ID</b>
                </td>
                <td style="width:200px " >
                    <b>Product Name</b>
                </td>

                <td style="width:200px " >
                    <b>Product Type</b>
                </td>

                <td style="width:450px " >
                    <b>Description</b>
                </td>

                <td style="width:110px " >
                    <b>Price (in USD)</b>
                </td>

            </tr>

            <?php
            if (isset($_POST["searchitem"])) {
                $q = "Select * from products where product_name like '".$_POST["searchitem"]."%'";
                //echo("<div>Requête exécutée:".$q."</div>");

                if (isset($_GET['debug']))
                {
                    if ($_GET['debug']=="true")
                    {
                        echo "<pre>".$q."</pre><br /><br />";
                    }
                }

                try {
                    $result = $con->query($q);

                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        echo "<tr><td style=\"width:50px\">".$row['id']."</td><td style=\"width:200px\">".$row['product_name']."</td><td style=\"width:200px\">".$row['product_type']."</td><td style=\"width:450px\">".$row['description']."</td><td style=\"width:110px\">".$row['price']."</td></tr>";
                    }
                } catch (PDOException $e) {
                    die("</table></div>". $e->getMessage());
                }
            }
            ?>
        </table>
    </div>

    <div class="footer">
        <p><h4><a href="index.php">Home</a><h4></p>
    </div>

    <div class="footer">
        <p>BTS SIO Gabriel Fauré | @siofaure | sio@lycee-faure.fr</p>
    </div>

</div> <!-- /container -->

</body>
</html>
