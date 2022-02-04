<?php include('../header.php'); ?>
<h2>Constructor</h2>
<ul>
<li>Constructor is a special type of function which will be called automatically whenever we create an object of a class.</li>
<li>The __construct() method is a special method of a class. Whenever a new object is created from the class, this method will execute automatically. So if we have to perform some preliminary tasks in our object while initiating it, we will do from this constructor method. For example, in the constructor method of this Emailer class we just set the $recipients as a blank array and we also set the sender name.</li>
<li>There are some preliminary task like connecting with database, initialize some variables etc.</li>
<li>A constructor method is just like other normal method and it has public, private, protected modifier, search this or experiment this</li>
<li>Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.</li>
<li>A constructor method is the method that executes automatically while creating instances of the class. In PHP5, there are two ways you can write a constructor method inside a class. The first one is to create a method with the name __construct() inside the class. The second is to create a method naming exactly the same as class name. For example if your class name is Emailer, the name of the constructor method will be Emailer(). Let's take a look at the following class which calculates the factorial of any number: </li>
</ul>
<code>
    <p>class factorial</p>
    <ul>
        <li>{</li>
        <li>private $result = 1;</li>
        <li>private $number; </li>
        <li>
            <ul>
                <li>
                    function __construct($number) 
                    <ul>
                        <li>{ </li>
                        <li>$this->number = $number; </li>
                        <li>
                            for($i=2; $i<=$number; $i++)
                            <ul>
                                <li>{</li>
                                <li>$this->result *= $i; </li>
                                <li>}</li>
                            </ul>
                        </li>
                        <li>}</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            public function showResult() 
            <ul>
                <li>{</li> 
                <li>echo "Factorial of {$this->number} is {$this->result}. "; </li>
                <li>}</li>
            </ul>
        </li>
        <li>}</li>
    </ul>
</code>
<ul>
    
</ul>
<li>In the code above, we used __construct() as our constructor function. The behaviour will be same if you rename the __construct() function as factorial(). </li>
<li>Now, you may ask if a class can have constructors in both styles? This means a function named __construct() and a function named the same as class name. So which constructor will execute, or will they both execute? This is a good question. Actually there is no chance of executing both. If there is a constructor in both styles, PHP5 will give preference to the __construct() function and the other one will be ignored. Let's take a look using the following example</li>
<code>
    <p>class Factorial</p>
<ul>
    <li>{ </li>
    <li>private $result = 1; </li>
    <li>private $number; </li>
    <li>
        function __construct($number)
        <ul>
            <li>{</li>
            <li>$this->number = $number;</li>
            <li>
                for($i=2; $i<=$number; $i++)
                <ul>
                    <li>{</li> 
                    <li>$this->result*=$i; </li>
                    <li>}</li> 
                </ul>
            </li>
            <li>echo "__construct() executed. "; </li>
            <li>}</li> 
        </ul>
    </li>
    <li>
        function factorial($number)
        <ul>
            <li>{</li> 
            <li>$this->number = $number; </li>
            <li>
                for($i=2; $i<=$number; $i++)
                <ul>
                    <li>{ </li>
                    <li>$this->result*=$i; </li>
                    <li>}</li> 
                </ul>
            </li>
            <li>echo "factorial() executed. "; </li>
            <li>}</li> 
        </ul>
    </li>
    <li>
        public function showResult()
        <ul>
            <li>{ </li>
            <li>echo "Factorial of {$this->number} is {$this->result}. "; </li>
            <li>}</li>
        </ul>
    </li>
    <li>
        function __destruct()
        <ul>
            <li>{</li>
            <li>echo " Object Destroyed.";</li>
            <li>}</li>
        </ul>
    </li>
    <li>}</li>
</ul>
</code>
<ul>
    <li>Now if you use this class as shown below: You will find that the output is:
    __construct() executed. Factorial of 5 is 120</li> 
    <li>Similar to the constructor method, there is a destructor method which actually works upon destroying an object. You can explicitly create a destructor method by naming it __destruct(). This method will be invoked automatically by PHP at the end of the execution of your script. To test this, let's add the following code in our factorial class:</li>
    <li>Now execute the usage script again, you will see the following output this time: 
    __construct() executed. Factorial of 5 is 120. Object Destroyed.</li>
</ul>

<?php include('../footer.php'); ?>