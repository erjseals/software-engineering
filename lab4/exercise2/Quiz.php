<?php
    $answerOne   = $_POST['firstQ']; 

    $answerTwo   = $_POST['secondQ']; 

    $answerThree = $_POST['thirdQ']; 

    $answerFour  = $_POST['fourthQ']; 

    $answerFive  = $_POST['fifthQ']; 


    $questionOne    = "Do you believe in the accuracy of this quiz?";

    $questionTwo    = "When was the last time you felt confident in your personality?";

    $questionThree  = "Do you feel like this quiz is lame and annoying?";

    $questionFour   = "In what month were you born?";

    $questionFive   = "Was this a waste of time?";


    $correctOne     = "Why not";

    $correctTwo     = "Hopefully tomorrow";

    $correctThree   = "Yes to both";

    $correctFour    = "April";

    $correctFive    = "No";

    
    $quizScore      = 0;
   
 
        echo "Question 1: $questionOne<br>";
        echo "You answered: $answerOne<br>";
        echo "Correct answer: $correctOne<br><br>";

        echo "Question 2: $questionTwo<br>";
        echo "You answered: $answerTwo<br>";
        echo "Correct answer: $correctTwo<br><br>";

        echo "Question 3: $questionThree<br>";
        echo "You answered: $answerThree<br>";
        echo "Correct answer: $correctThree<br><br>";

        echo "Question 4: $questionFour<br>";
        echo "You answered: $answerFour<br>";
        echo "Correct answer: $correctFour<br><br>";

        echo "Question 5: $questionFive<br>";
        echo "You answered: $answerFive<br>";
        echo "Correct answer: $correctFive<br><br>";


    if($answerOne == $correctOne)
        $quizScore = $quizScore + 1;
    
    if($answerTwo == $correctTwo)
        $quizScore = $quizScore + 1;

    if($answerThree == $correctThree)
        $quizScore = $quizScore + 1;
    
    if($answerFour == $correctFour)
        $quizScore = $quizScore + 1;
    
    if($answerFive == $correctFive)
        $quizScore = $quizScore + 1;


    switch($quizScore) 
    {
        case 0:
            echo "You scored 0%<br>";
            break;
        case 1:
            echo "You scored 20%<br>";
            break;
        case 2:
            echo "You scored 40%<br>";
            break;
        case 3:
            echo "You scored 60%<br>";
            break;
        case 4:
            echo "You scored 80%<br>";
            break;
        case 5:
            echo "You scored 100%<br>";
            break;
    }

    error_reporting(E_ALL);
    ini_set("display_errors" , 1 );
?>
























