<?php include('../header.php'); ?>

<h2>Class Constants</h2>
<p>we already know that we can create constants in your PHP scripts using the define keyword.</p>
<p>define(constant name, constant value).</p>
<p>But to create constants in the class we use the const keyword. These constants actually work like static variables, the only difference is that they are read-only. Let's see how we can create constants and use them:</p>
<p>Don't need not use $ sign before Constants</p>

<code>
<p>class WordCounter</p>
<ul>
    <li>{</li>
    <li>const ASC=1;</li>
    <li>const DESC=2;</li>
    <li>private $words = 'hi this is hello, this is world, this is hello world.';</li>
    <li>
        public function __construct($filename)
        <ul>
            <li>{</li>
            <li>$this->words = (array_count_values(str_word_count($this->words,1)));</li>
            <li>}</li>
        </ul>
    </li>
    <li>
        public function count($order)
        <ul>
            <li>{</li>
            <li>if ($order==self::ASC)</li>
            <li>asort($this->words);</li>
            <li>else if($order==self::DESC)</li>
            <li>arsort($this->words);</li>
            <li>foreach ($this->words as $key=>$val)</li>
            <li>echo $key ." = ". $val</li>
            <li>}</li>
        </ul>
    </li>
    <li>}</li>
</ul>
<p>$obj = new WordCounter();</p>
<p>$obj->count(WordCounter::ASC);</p>
</code>
<p>This WordCounter class counts the frequency of words in a string. Here we define two constant names ASC and DESC whose values are 1 and 2 respectively. To access these constants from within the class, we reference them with the self keyword. Please note that we are accessing them with the :: operator, not a -> operator, because these constants act like a static member.</p>
<p>Please note that we are accessing the class constants from outside the class by following the :: operator right after the class name, not after the instance of the class.</p>
<p>Now run the script, and you will get the result, see below:</p>
<code>
<p>hi = 1</p>
<p>hello = 2</p>
<p>world = 2</p>
<p>this = 3</p>
<p>is = 3</p>
</code>