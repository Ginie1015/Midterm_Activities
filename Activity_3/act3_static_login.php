<?php
$arrUsers = array(  
            array('type' => 'Admin','name' => 'admin','pass' => 'admin'),
            array('type' => 'Content Manager','name' => 'juan','pass' => 'delacruz'), 
            array('type' => 'Content Manager','name' => 'pedro','pass' => 'penduko'),
            array('type' => 'System User','name' => 'enteng','pass' => 'kabisote'),
            array('type' => 'System User','name' => 'pepito','pass' => 'manaloto')

);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
    <title>Static Login</title>
</head>
<body>
    <div class="container w-25" align="center">
        <?php
            if (isset($_REQUEST['btnLog'])) {
                $user = $_REQUEST['drpUsers'];
                $name = $_REQUEST['inputName'];
                $pass = $_REQUEST['inputPassword'];

                if($user == $arrUsers[0]['type'] && $name == $arrUsers[0]['name'] && $pass == $arrUsers[0]['pass']) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-3" align="left" role="alert"><strong>Welcome to the System: '.$name.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
                elseif($user == $arrUsers[1]['type'] && $name == $arrUsers[1]['name'] && $pass == $arrUsers[1]['pass']) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-3" align="left" role="alert"><strong>Welcome to the System: '.$name.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
                elseif($user == $arrUsers[3]['type'] && $name == $arrUsers[3]['name'] && $pass == $arrUsers[3]['pass']) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-3" align="left" role="alert"><strong>Welcome to the System: '.$name.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
                elseif($user == $arrUsers[4]['type'] && $name == $arrUsers[4]['name'] && $pass == $arrUsers[4]['pass']) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-3" align="left" role="alert"><strong>Welcome to the System: '.$name.'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
                else
                    echo '<div class="alert alert-danger alert-dismissible fade show mt-3" align="left" role="alert"><strong>Inavalid Username / Password</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                
            }
        ?>
        <div class="card card-container">
            <i class="fa-solid fa-user text-center fa-5x"></i>
            <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="post">
                    <select name="drpUsers" id="drpUsers" class="form-control" required autofocus>
                        <option value="Admin">Admin</option>
                        <option value="Content Manager">Content Manager</option>
                        <option value="System User">System User</option>
                    </select>
                    <span id="reauth-email" class="reauth-email"></span>
                        <input type="text" name="inputName" id="inputName" class="form-control" placeholder="User Name" required>
                        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name= "btnLog" id="btnLog">Sign in</button>
                </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>