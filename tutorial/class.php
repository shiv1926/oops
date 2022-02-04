<?php include('../header.php'); ?>
<h2>Class : what is self keyword in php class</h2>
<ul>
    <li>In procedual programming language there is not a perfect solution to handle different kind of data at once, therefore a class is invented. in OOPS, a class can handle different kind of data at once.</li>
    <li>A Class is a user-defined data type, which contain variable and functions.</li>
    <li>naming convention for class follow the same naming convention as variables, i.e. you can't start with a numeric letter, etc.</li>
    <li>A class is a blueprint for an object. In class we define two types of data, one is variable and one function.</li>
    <li>A class is a template for an objects, and an object is an instance of class.</li>
    <li>A class is a passive entity and object is an active entity, it means class does not consume any memory while object consume memory. </li>
    <li>A Class is only an logical entity and not the physical entity.</li>
    <li>A class is a template for an object. A class contains the code which defines how an object will behave and interact either with each other, or with it.</li>
</ul>

<table border="1" cellspacing="0" cellpadding="5">
    <caption>Class data and their synonyms</caption>
    <tr>
        <th>variable</th><td>member variable</td><td>attribute</td><td>properties</td>
    </tr>
    <tr>
        <th>functions</th><td>member functions</td><td>behaviour</td><td>methods</td>
    </tr>
</table>
<p><strong>Data Members = Member Variables + Member Function</strong></p>
<p><strong>Property:</strong> A property is a variable that store some information. These variables are defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.</p>

<p><strong>Method:</strong> Methods are functions defined inside a class. These methods are used to access or manipulate the class data.</p>

<strong>Syantax and example of class</strong>
<code>
<p>class Vehicle</p>
<ul>
    <li>{</li>
    <li>/* in this area we define variables of class, here we can define variable and assign the value to the variable at the same time, or can update using member functions  */</li>
    <li>public $name;</li>
    <li>public $modal;</li>
    <li>public $type='car';</li>
    <li>function __construct($carname)
        <ul>
            <li>{ </li>
            <li>$this->name = $carname; </li>
            <li>$this->modal = 2017; </li>
            <li>} </li>
        </ul>
    </li>
    <li>
        public function getmodal()
        <ul>
            <li>{</li>
            <li>return $this->modal;</li>
            <li>}</li>
        </ul>
    </li>
    <li>}</li>
</ul>
</code>
<ul>
<li>In this code, the name of our class is Vehicle. After that we declared the properties of this class. There are three properties here $name, $modal and $type. </li> 
<li>In this class there are two functions, __construct(), getmodal().</li>
<li>Please note that we used keyword public. we will discuss it in detail</li>
<li>If we want to access class variables within the function, we must refer to it with $this. $this means a reference to current instance of this object.</li> 
<li>Similarly properties, we can access any member method inside another member method in this format.</li>
<li>Please note that $this keyword is only valid inside the scope of a method, as long as it is not declared as static. You can not use $this keyword from outside the class.</li> 
</ul>
<p><strong>$this variable scope : </strong></p>
<p>The pseudo-variable $this is available when a method is called from within an object context. $this is a reference to the calling object (usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object).</p>
<h2>How to get list of all properties and methods in php</h2>
<code>
    <table class="code_table" border="0" cellspacing="0" cellpadding="5">
        <tr>
            <td>$obj = new Classname();</td>
            <td>Create a new object from class.</td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td>print_r($obj);</td>
            <td>list all public properties</td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td>print_r(get_object_vars($obj));</td>
            <td>list all public properties</td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td>var_dump($obj);</td>
            <td>list all public properties</td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td>print_r(get_class_methods('Vehicle'));</td>
            <td>list all public methods</td>
        </tr>
    </table>
</code>
<h2>Note: We can not list private or protected methods using any function.</h2>
<?php include('../footer.php'); ?>