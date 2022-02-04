<?php
class WordCounter
{
    const ASC=1;
    const DESC=2;
    private $words = 'hi this is hello, this is world, this is hello world.';
    public function __construct()
    {
        $this->words = (array_count_values(str_word_count($this->words,1)));
    }
    public function count($order)
    {
        if ($order==self::ASC)
        asort($this->words);
        else if($order==self::DESC)
        arsort($this->words);
        foreach ($this->words as $key=>$val) {
            echo '<div>'.$key ." = ". $val.'</div>';
        }
    }
}

$obj = new WordCounter();
$obj->count(WordCounter::ASC);