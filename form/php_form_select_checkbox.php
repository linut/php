<?php

$q = isset($_POST['q']) ? $_POST['q'] : '';

if(is_array($q)){
    $sites = array(
            'ck1' => 'ck1',
            'ck2' => 'ck2',
            'ck3' => 'ck3',
    );
    foreach($q as $val){
        echo $sites[$val] . "<br>";
    }
}else{
    ?>
        <form action="" method="post">
            <input type="checkbox" name="q[]" id="ck1" value="ck1">ck1<br>
            <input type="checkbox" name="q[]" id="ck2" value="ck2">ck2<br>
            <input type="checkbox" name="q[]" id="ck3" value="ck3">ck3<br>
            <input type="submit" value="提交">
        </form>
    <?php
}

?>
