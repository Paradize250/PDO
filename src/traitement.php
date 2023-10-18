<?php
include './fonctions/index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"):
?>

<ul>
<?php foreach($_POST as $key => $val): 
    // if (is_array($val)) :
    //     $val = implode(',',$_POST['competance']);
    // endif;
    
    // $val = is_array($val) ? implode(',',$_POST['competance']) : $val;
   
    $val = is_array($val) ? implode(',',$val) : $val;
    ?>
    <li><strong><?=$key;?></strong> : <?=$val;?></li>
<?php endforeach; ?>
</ul>

<hr>

<?php
else :
    die('Validation echoué');
endif;
?>


