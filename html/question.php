<?php
    $id = '1';
    $question = 'HTMLはなんの略';
    
    $answers = [
        'A' => 'HyperTextMakingLanguage',
        'B' => 'HyperTextMarkupLanguage',
        'C' => 'HonmaniTensaitekinaMajidesugoiLanguage',
        'D' => 'そもそも略称ではない',
    ];
    
    $correctAnswer = 'B';
    $correctAnswerValue = $answers[$correctAnswer];
    $explanation = 'これが間違えてたら「HTMLとは？」の動画を復習お願いします!';
    

    include __DIR__.'/../template/question.tpl.php';
    