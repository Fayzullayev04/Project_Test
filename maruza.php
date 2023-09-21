<html>
<body>
   <?php

    if(isset($_POST['birinchi'])and isset($_POST['ikkinchi']))
    {
        $a1 = $_POST['birinchi'];
        $a2 = $_POST['ikkinchi'];
        $natija = $a1+$a2;
    }
    else {$natija=0;}

    for($i=1;$i<10;$i++){
        echo "<input type='number' name='sonlar' value=$i><br>";
    }

    $k=1;
    while($k<11)
    {
        echo "<input type='button' name='sonlar' value=$k><br>";
        $k++;
    }

    $l=1;
    do{
        echo "<input type='radio' name='sonlar'>$l<br>";
        $l++; 
    }
    while($l<11);

    
   
    
    $ism = "Salim";
    $yosh = 45;

    echo $ism." ".$yosh." yoshda<br>";
    echo "$ism $yosh yoshda<br>";
    printf("%s %s yoshda",$ism,$yosh);
   ?>

<form action="" method="post">
    <input type="number" name="birinchi" value="<?=$a1;?>">+
    <input type="number" name="ikkinchi" value="<?=$a2;?>">
    <input type="submit" value="=" id="">
    <input type="number" name="javob" id="" value="<?=$natija;?>">
</form>




</body>
</html>