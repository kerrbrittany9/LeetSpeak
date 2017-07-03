<?php
    class LeetspeakTranslator
    {
        function translate($input)
        {
            $input_word = explode(" ", $input);
            $output_translate = array();
            for ($index = 0; $index = $input; $index ++) {
                if($index == 'e' || $index == 'E') {
                    array_pop($output_translate);
                    array_push($output_translate, '3');

                }
            }
            return implode(" ", $output_translate);
        }

    }



?>
