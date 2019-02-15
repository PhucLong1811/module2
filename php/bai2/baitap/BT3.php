<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    $mangSo_haiChieu= array(
        array(1,2,3,4,5,6,7,8),
        array(4,5,6,7,8,9,10,11)
    );
    $maxNum= $mangSo_haiChieu[0][0];
    for ($i=0; $i < 2; $i++) {
        $mangSoMot = count($mangSo_haiChieu[$i]);
        for ($j=0; $j < count($mangSo_haiChieu[$i]); $j++) {
            if ($maxNum < $mangSo_haiChieu[$i][$j]) {
                $maxNum = $mangSo_haiChieu[$i][$j];
            }        
        }
    }
    echo $maxNum;
    ?>
</body>
</html>