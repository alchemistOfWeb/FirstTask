<?php

$text = "У рекламы ухватов — швах с охватом, а прихватки и без охвата расхватали.";

$pattern = "/\b[а-яА-яёЁa-zA-Z]+\b/u";

$num_of_strings = preg_match_all($pattern, $text);

echo $num_of_strings;
