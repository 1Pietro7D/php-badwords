<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

if( isset($_GET['word']) ){
    $badWord = $_GET['word'];
}
$paragraph = "miao miao bau bau miao miao bau bau";
$censoredParagraph = str_ireplace($badWord, '***', $paragraph);

?>

<p> Paragraph:" <?= $paragraph ?> "</p>
<p> Length <?= strlen ($paragraph) ?> </p>
<p> Paragraph censored:" <?= $censoredParagraph ?> "</p>
<p> Length paragraph censored<?= strlen ($censoredParagraph) ?></p>
