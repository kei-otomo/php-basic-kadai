<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 条件
        

        function sort_2way ($array, bool $order) {
            if ($order) {
                echo '昇順にソートします。' . '<br>';
                asort($array);
            } else {
                echo '降順にソートします。' . '<br>';
                arsort($array);
            }

            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10];
        $order = TRUE;

        // 昇順ソート
        sort_2way($nums, $order);

        //降順ソート
        sort_2way($nums, $order);


        ?>
    </p>
</body>

</html>
