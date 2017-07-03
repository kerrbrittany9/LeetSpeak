<?php
    require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate_singleWordE()
        {
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "tree";

            $result = $test_LeetspeakTranslator->translate($input);

            $this->assertEquals("tr33", $result);
        }
    }

?>
