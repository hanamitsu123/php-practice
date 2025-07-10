<!-- Q1 変数と文字列 -->
<?php

$myName = '德永';

echo '私の名前は「' . $myName . '」です。';

// Q2 四則演算
<?php

$num = 5 * 4;

echo $num . "\n";

$num /= 2;

echo $num;

// Q3 日付操作
<?php

echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
<?php
//入力値
$device = 'mac';
//使用OSを判定する。
if ($device === 'windows') {
  echo '使用OSは、windowsです。';

} else {

    if($device === 'mac') {

        echo '使用OSは、macです。';

    } else {

        echo 'どちらでもありません。';

    }
}

// Q5 条件分岐-2 三項演算子
<?php
//入力値
$age = 18;
//未成年か成人か判定する。
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
<?php
$kantoArea = ['東京都', '埼玉県', '栃木県', '千葉県', '神奈川県', '群馬県', '茨城県'];

echo "{$kantoArea[2]}と{$kantoArea[3]}は関東地方の都道府県です。";

// Q7 連想配列-1
<?php

$prefecturalCapitalLocation = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];

foreach ($prefecturalCapitalLocation as $capital) {

  echo $capital . "\n";

};

// Q8 連想配列-2
<?php
//入力値
$input = '茨城県';

//関東圏の県庁所在地リスト
$prefecturalCapitalLocation = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];

//foreachで県庁所在地リストを回し、入力値と比較する。
foreach ($prefecturalCapitalLocation as $prefecture => $capital) {

    if ($input === $prefecture) {
        echo $prefecture . 'の県庁所在地は' . $capital . 'です';
        break;
    }
}

// Q9 連想配列-3
<?php
//関東圏の県庁所在地配列
$$prefecturalCapitalLocation = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];
//県庁所在地配列に関東以外の都道府県を追加する。
$prefecturalCapitalLocation += [
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市',
];
//配列の最後のキーを記録する。
$last_index = array_key_last($prefecturalCapitalLocation);

//foreachで県庁所在地リストを回し、入力値と比較する。
foreach ($prefecturalCapitalLocation as $prefecture => $capital) {

    //関東圏かどうかを判定する。
    if ($prefecture === '愛知県' or $prefecture === '大阪府') {

      echo $prefecture . 'は関東地方ではありません。';

    } else {

      echo $prefecture . 'の県庁所在地は' . $capital . 'です';

    }

    //最後の出力でなければ、改行する。
    if ($prefecture !== $last_index) {

      echo "\n";

    }
}

// Q10 関数-1
<?php
function hello($name)
{

    $message = $name . 'さん、こんにちは。' . "\n";
    return $message;

}

echo hello ('アグモン');
echo hello ('カブタック');

// Q11 関数-2
<?php
//入力値
$price =20000;
//税率
const TAX = 1.1;
//税率掛けて返す。
function calcTaxInPrice($price)
{

    $taxInPrice = $price * TAX;
    return $taxInPrice;

}

echo $price . '円の税込価格は' . calcTaxInPrice($price) . '円です。';

// Q12 関数とif文
<?php

//奇数か偶数か判定して、結果メッセージを返す。
function distinguishNum(int $value)
{

    if ($value % 2 === 0) {

       return $value . 'は偶数です。';

    }

    return $value . 'は奇数です。';

}

echo distinguishNum(23);

// Q13 関数とswitch文
<?php
//成績ランクを判定し、結果メッセージを返す。
function evaluateGrade($score)
{
    switch ($score) {

        case 'A':
        case 'B':

            return '合格です。';

        case 'C':

            return '合格ですが追加課題があります。';

        case 'D':

            return '不合格です。';

        default:

            return '判定不明です。講師に問い合わせてください。';

    }
}

echo evaluateGrade('A');