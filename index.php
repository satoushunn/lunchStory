<?php
$startmoney = rand(500 , 1000);
$a = rand(0,1);
if ($startmoney >= 750) {
    $aftermoney = $startmoney - 750 ;
    $bossSay = '「ありがとう」';
    $destiny = 'YES';
}else{
    if ($a == 0){
        $aftermoney = $startmoney;
        $bossSay ='「ランチを食べてもいい」→「頑張って」';
        $destiny = 'YES';
    }else{
        $aftermoney = 0;
        $bossSay = '「ランチを食べてもいい」→「出ていけ」';
        $destiny = 'YES';
    
    }
}
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aさんの運命</title>
</head>
<body>
    <div class="lunchtime">
        <p>Aさんのランチ前の所持金[<?php echo $startmoney;?>]円</p>
        <p>ランチ代750円</p>
        <p>店主の発言[<?php echo $bossSay;?>]</p>
        <p>Aさんはランチを食べることができたか？　[<?php echo $destiny; ?>]</p>
        <p>Aさんのランチ後の所持金[<?php echo $aftermoney; ?>]円</p>
    </div>
</body>
</html>

