<?php
include 'db.php';

function checkWinner($board) {
    $win_conditions = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
        [0, 4, 8], [2, 4, 6]             // Diagonals
    ];

    foreach ($win_conditions as $condition) {
        if ($board[$condition[0]] && $board[$condition[0]] == $board[$condition[1]] && $board[$condition[0]] == $board[$condition[2]]) {
            return $board[$condition[0]];
        }
    }

    return null;
}
?>
