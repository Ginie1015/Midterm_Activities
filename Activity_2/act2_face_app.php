<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Face App</title>
</head>
<body>
    <div class="divmarg">
        <br>
        <h2>Peys App</h2><br>
        <form action="">
            <label for="txtPhoto">Select Photo Size:</label>
            <input type="range" name="txtPhoto" id="txtPhoto" min="10" step="10" value="60"><br>

            <label for="clrPhoto">Select Border Color:</label>
            <input type="color" name="clrPhoto" id="clrPhoto"><br>

            <button type="submit" name="btnProcess" id="btnProcess">Process</button><br>

        </form>
        <div class="card" style="width: 300px;">
            <div class="center">
                <?php
                    if (isset($_REQUEST['btnProcess'])) {
                        echo '<img src="img/photo.jpg" alt="" width="'. $_REQUEST['txtPhoto'] .'%" class="mx-auto d-block mt-3" style="border: 2px solid ' . $_REQUEST['clrPhoto'] . '";>';
                    }
                ?>
            </div>       
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>