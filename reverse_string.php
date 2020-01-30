<?php

<?php

function reverseString($input)
{
    $currentWord = '';
    $words = array();

    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] == ' ') {
            $words[] = $currentWord;
            $currentWord = '';
            continue;
        }

        $currentWord .= $input[$i];

        if ($i == (strlen($input) - 1)) {
            $words[] = $currentWord;
        }
    }

    if (!empty($words)) {
        $reversed = array();

        for ($i = (count($words) - 1); $i >= 0; $i--) {
            $reversed[] = $words[$i];
        }

        $output = '';

        foreach ($reversed as $word) {
            $output .= $word . ' ';
        }

        return trim($output);
    }
}

$input = 'Kalbe adalah perusahaan yang bergerak di bidang kesehatan terbesar';
$output = reverseString($input);

echo "Input: $input<br />Output: $output";