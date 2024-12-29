<?php
 #Quiz-App 
 $questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],

];
$answers = [];
foreach($questions as $index => $value) {
    echo ($index + 1) . "." . $value['question'] . "\n";
    $answers[] = trim(readline("Write Your Answer: "));
}

function evaluateQuiz(array $questions, array $answers) {
    $score = 0;
    foreach($questions as $index => $question) {
        if($answers[$index] === $question["correct"]) {
            $score++;
        }
    }
    return $score;
}
$score = evaluateQuiz($questions, $answers);

echo "Your Scored $score Out Of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Excellent Job! \n";
}elseif($score > 1) {
    echo "Good Effort! \n";
}else {
    echo "Batter luck Next time";
}