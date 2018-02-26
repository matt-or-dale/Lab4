<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$score = 0;
$percent = 0;

$ans1 = $_POST["q1"];
echo "Question 1: If a tree falls in the forest and no one is around to hear it, does it make a sound?";
echo "<br>";
echo "You answered: ". $ans1;
echo "<br>";
echo "Correct answer: Who's to say?";
echo "<br>";
echo "<br>";
echo "<br>";
if($ans1 == "Who's to say?"){
  ++$score;
}

$ans2 = $_POST['q2'];
echo "Question 2: True or False, this sentence is a lie.";
echo "<br>";
echo "You answered: ". $ans2;
echo "<br>";
echo "Correct answer: I'm already annoyed with this quiz";
echo "<br>";
echo "<br>";
echo "<br>";
if($ans2 == "I'm already annoyed with this quiz"){
  ++$score;
}

$ans3 = $_POST['q3'];
echo "Question 3: What is the airspeed velocity of an unladen swallow?";
echo "<br>";
echo "You answered: ". $ans3;
echo "<br>";
echo "Correct answer: African or European?";
echo "<br>";
echo "<br>";
echo "<br>";
if($ans3 == "African or European?"){
  ++$score;
}

$ans4 = $_POST['q4'];
echo "Question 4: How many national championships has KU Men's Basketball won?";
echo "<br>";
echo "You answered: ". $ans4;
echo "<br>";
echo "Correct answer: Five";
echo "<br>";
echo "<br>";
echo "<br>";
if($ans4 == "Five"){
  ++$score;
}

$ans5 = $_POST['q5'];
echo "Question 5: Is Matt getting a good grade on this lab?";
echo "<br>";
echo "You answered: ". $ans5;
echo "<br>";
echo "Correct answer: We'll see";
echo "<br>";
echo "<br>";
if($ans5 == "We'll see"){
  ++$score;
}

echo "Score: ". $score ."/5";
echo "<br>";
echo "<br>";
echo "Percentage: ". (($score/5)*100) ."%";




?>
