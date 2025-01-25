
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afternoon Tea</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link href="../styles/homepage.css" rel="stylesheet">
    <link rel="icon" href="../assets/images/Logo.png">
</head>
<body>
    <?php 
    include('../conection/conection.php');
    include('../global/nav.html'); 
    ?>
    <section id="lastreviewbanner">
        <div id="covercontainerbanner">
            <div id="titlecontainerbanner"> 
            </div>
            <button id="seereviewbutton">see review</button>
        </div>
    </section>

        <section id="otherreviews">

    </section> 

    <?php 
    include('../global/footer.html'); 
    ?>
</body>
</html>