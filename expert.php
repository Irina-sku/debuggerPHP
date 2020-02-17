<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

new_exercise(1); //function call
function new_exercise($x) { //add parameter for it to work
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; //array's start counting at 0
echo $monday;

new_exercise(3);
$str = "Debugged ! Also very fun"; //wrong quotes
echo substr($str, 0, 10);

new_exercise(4);
foreach ($week as &$day) { //& = value reference, does not create new instance of variable.
    $day = substr($day, 0, strlen($day) - 3);
}
print_r($week);

new_exercise(5);
$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) { //string comparison looks at 1st character in string
        array_push($arr, $letter);
}
print_r($arr);

new_exercise(6);
function randomGenerate(array $arr) :array {
    $param = [];
    for ($i = 0; $i <= 1; $i++) {
        $param[$i] = $arr[$i][rand(0, 10)];
    }
    return $param;
}

function randomHeroName() {
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    return randomGenerate($heroes);
}

echo "Here is the name: " . implode(randomHeroName(), " - ");

new_exercise(7);
function copyright(string $year) :string { //wrong dataType
    return "&copy; $year BeCode";
}

echo copyright(date('Y'));

new_exercise(8);
function login(string $email, string $password) :string {
    if($email == 'john@example.be' || $password == 'pocahontas') {
        return "Welcome John Smith<br/>";
    }
    return "No access<br/>";
}
//should great the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
echo $login;
//no access
$login = login('john@example', 'dfgidfgdfg');
echo $login ;
//no access
$login = login('wrong@example', 'wrong');
echo $login;

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br/>';
        }
    }
    return 'Acceptable<br/>';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i= count($areTheseFruits); $i >= 0; $i--) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this
