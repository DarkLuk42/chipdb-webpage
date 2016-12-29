<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 28.12.16
 * Time: 13:59
 */

namespace App\DarkLuk42;


use Exception;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class StringUtil
{

    /**
     * Ord for UTF-8 encoding encoding.
     *
     * @see http://php.net/manual/de/function.ord.php
     * @param string $string
     * @param string $encoding default 'UTF-8'
     * @return int
     * @throws Exception
     */
    public static function ord($string, $encoding = 'UTF-8') {
        if($encoding === 'ASCII') {
            return \ord($string);
        } else if($encoding === 'UTF-8') {
            $offset = 0;
            $code = \ord(substr($string, $offset,1));
            if ($code >= 128) {        //otherwise 0xxxxxxx
                if ($code < 224) $bytesnumber = 2;                //110xxxxx
                else if ($code < 240) $bytesnumber = 3;        //1110xxxx
                else if ($code < 248) $bytesnumber = 4;    //11110xxx
                else throw new Exception('maleformed UTF-8');
                $codetemp = $code - 192 - ($bytesnumber > 2 ? 32 : 0) - ($bytesnumber > 3 ? 16 : 0);
                for ($i = 2; $i <= $bytesnumber; $i++) {
                    $offset ++;
                    $code2 = \ord(substr($string, $offset, 1)) - 128;        //10xxxxxx
                    $codetemp = $codetemp*64 + $code2;
                }
                $code = $codetemp;
            }
            $offset += 1;
            if ($offset >= strlen($string)) $offset = -1;
            return $code;
        } else {
            throw new Exception('Unknown encoding.');
        }
    }

    /**
     * Returns if string/char is ascii only.
     *
     * @param string $string
     * @return bool
     */
    public static function isAscii($string) {
        return !preg_match('/[^\x20-\x7f]/', $string);
    }

    /**
     * Replaces all non-ascii characters with html-entities.
     * @param string $string
     * @return string
     */
    public static function utf8ToAsciiHtml($string) {
        $str = '';
        $length = mb_strlen($string);
        for($i = 0; $i < $length; $i++) {
            $char = mb_substr($string, $i, 1);

            if(in_array($char, ['_', '~'])) {
                $escapedChar = '&#'.self::ord($char).';';
            }else if(!self::isAscii($char)) {
                $escapedChar = htmlentities($char, ENT_NOQUOTES | ENT_HTML5, 'UTF-8');
                $escapedChar = $escapedChar !== $char ? $escapedChar : '&#'.self::ord($char).';';
            }else{
                $escapedChar = $char;
            }
            $str .= $escapedChar;
        }
        return $str;
    }

    /**
     * Replaces all html-entities with the equivalent utf8 character.
     *
     * @param string $string
     * @return string
     */
    public static function asciiHtmlToUtf8($string) {
        return html_entity_decode($string, ENT_NOQUOTES | ENT_HTML5, 'UTF-8');
    }

    /**
     * Replaces strings recursively in complete array (keys inclusive).
     *
     * @param array|string $obj
     * @param callable $callback
     * @return array|string
     */
    public static function replaceStringRecursive($obj, $callback){
        if (!is_array($obj)) {
            return $callback($obj);
        } else {
            $newArr = array();
            foreach ($obj as $key => $value) {
                $newArr[self::replaceStringRecursive($key, $callback)] = self::replaceStringRecursive($value, $callback);
            }
            return $newArr;
        }
    }

    /**
     * Replaces all non-ascii characters with html-entities recursively in complete array (keys inclusive).
     *
     * @param array|string $obj
     * @return array|string
     */
    public static function utf8ToAsciiHtmlRecursive($obj){
        return self::replaceStringRecursive($obj, [self::class, 'utf8ToAsciiHtml']);
    }

    /**
     * Replaces all html-entities with the equivalent utf8 character recursively in complete array (keys inclusive).
     *
     * @param array|string $obj
     * @return array|string
     */
    public static function asciiHtmlToUtf8Recursive($obj){
        return self::replaceStringRecursive($obj, [self::class, 'asciiHtmlToUtf8']);
    }

    public static function isIntString($string) {
        return preg_match('/^[0-9]+$/', $string);
    }

    public static function isFloatString($string) {
        return preg_match('/^[0-9,\.]+$/', $string);
    }
}