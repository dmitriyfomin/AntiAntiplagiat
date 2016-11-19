<?php

/**
 * AntiAntiplagiat
 * 
 * @author Dmitry Fomin
 */
class Newclass {

    /**
     * Method fake_chars
     * 
     * @param string $chars
     * @return string
     */
    public static function fake_chars($chars) {
        $chars = str_replace(array(" ", ",", ":", ".", "?", "!", "),", ").", ")", ";", "А", "а", "В", "Е", "е", "Н", "о", "р", "С", "с", "Т", "у", "х"), array(" &#8202;", ", &#8202;", ": &#8202;", ". &#8202;", "? &#8202;", "! &#8202;", "), &#8202;", "). &#8202;", ") &#8202;", "; &#8202;", "A", "a", "B", "E", "e", "H", "o", "p", "C", "c", "T", "y", "x"), $chars);
        return $chars;
    }

}

$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
switch ($a):
    case 'get':
        $text = htmlspecialchars(filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING));
        $res = Newclass :: fake_chars($text);
        echo $res . '<br/><br/>';
        break;
    default:
//
        break;
endswitch;
echo '<form action="anti.php?a=get" method="post">
<textarea cols="50" rows="50" name="text" type="text"></textarea><br/><br/>
<input style="background: #9966ff; color: #ffffff; font-weight: bold;" type="submit" value="FUCK THE ANTIPLAGIAT!"/>
</form>';
