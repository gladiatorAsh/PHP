<?php
    $username = '';
    $password = '';
    $msg='';

    function Redirect($url, $permanent = false)
    {
        /*
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        */
        header('Location: '.$url);
        die();
        exit();
    }

    function Read($file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }
   
    if (isset($_POST['username1']))  
    $username = trim($_POST['username1']); 
    if (isset($_POST['password1']))   
    $password = trim($_POST['password1']);
        
    
    if($username=="admin"){
    /*
        echo "<script type='text/javascript'>alert('Hello');</script>";
    */
        //Redirect('pwd.txt', false);
        
        Read('pwd.txt');
    }
    else{
        
        $msg= 'username or password incorrect';
       
    }    
        echo "<script type='text/javascript'>alert('$msg');</script>";
    
    echo "<script>setTimeout(\"location.href = 'login.php';\",1);</script>";

    ?>
