// Q1 tic-tac問題
<?php
echo '1から100までのカウントを開始します' . "\n\n";

for ($i = 1; $i <= 100; $i++) {
    // 4と5の公倍数であるかを判定し、trueの場合にはtic-tacを出力する。
    if ($i % 4 === 0 AND $i % 5 === 0) {

        echo 'tic-tac';
    // 4の倍数であるかを判定し、trueの場合にはticを出力する。
    } elseif ($i % 4 === 0) {

        echo 'tic';
    // 5の倍数であるかを判定し、trueの場合にはtacを出力する。
    } elseif ($i % 5 === 0) {

        echo 'tac';
    // それ以外の値は、そのまま出力する。
    } else {

        echo $i;

    }
    if ($i !== 100) {

        echo "\n";

    }
}

// Q2 多次元連想配列
//問題1
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題2
<?php

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
//キーとバリューに分けます。
foreach ($personalInfos as $personInfo => $info) {

    echo ($personInfo + 1) . '番目の' . $info['name']
    . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . "です。\n";

}

//問題3
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $personalInfo => $infoTypes) {

    $personalInfos[$personalInfo]['age'] = $ageList [$personalInfo];

}

var_dump($personalInfos);

// Q3 オブジェクト-1
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(999, "フレディ");

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . "は" . $subject . 'の授業に参加しました。'
        . '学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
<?php
$lastMonth =  new DateTime();
//先月の日付に変更します。
$lastMonth->modify('-1 month');
//string型へ変換します。
echo $lastMonth->format('Y-m-d');

//問題2
<?php
$theCurrent =  new DateTime();
//過去の日付を代入します。
$thePast = new DateTime();
$thePast->setDate(1994, 3, 2);
//差分を求めます。
$difference = $theCurrent->diff($thePast);

echo 'あの日から' . $difference->days . '日経過しました。';