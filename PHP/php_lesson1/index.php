<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_TEST</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php echo 'Hello, world'; ?>
    <br>
    <?php echo 7 * 2; ?>
    <br>
    <?php echo 8 % 3; ?>
    <br>
    <?php
        $age = 42;
        if ($age >= 30) {
            echo 'あなたは30歳以上です';
        } else if($age < 30){
            echo 'あなたは30歳未満です';
        }
    ?>
    <br>
    <?php
        $num = 59;
        $remainder = $num % 3;
        switch($remainder){
            case 0:
                echo '大吉です';
                break;
            case 1:
                echo '中吉です';
                break;
            case 2:
                echo '小吉です';
                break;
            default;
                echo '凶です';
        }
    ?>    
</body>
</html>