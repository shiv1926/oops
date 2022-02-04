<?php include('../header.php'); ?>

<h2>Encapsulation / Data Hiding / Modifiers / Access Modifiers /Property Visibility</h2>
<ul>
    <li>hiding the data for security purpose.</li>
    <li>The whole idea behind encapsulation is to hide the implementation details from users.</li>
    <li>This way data can only be accessed by public methods thus making the private fields and their implementation hidden for outside classes. That’s why encapsulation is known as data hiding.</li>
    <li>Encapsulation is also known as "data Hiding".</li>
    <li>In real time we are using Encapsulation for security purpose.</li>
    <li>Encapsulation: Encapsulation is the process to bind the properties and methods together, and keeps both safe from outside interference and misuse. The wrapping up of data and methods into a single unit is known as encapsulation.</li>
    <li>we can access class method and varaible from 3 places, within the class, by child class and by object. so there are 3 access level for these 3 access places.</li>
    <li>Class member variables are called "properties". You may also see them referred to using other terms such as "attributes" or "fields", but for the purposes of this reference we will use "properties". They are defined by using one of the keywords public, protected, or private, followed by a normal variable declaration.</li>
    <li>Class properties must be defined as public, private, or protected. If declared using var without an explicit visibility keyword, the property will be defined as public.</li>
    <li><strong>Public:</strong> Any property or method which is not explicitly declared as private or protected is a public method. You can access a public method from inside or outside the class.</li>
    <li><strong>Protected:</strong> If any property or method is declared as protected, you can only access the method from its subclass. protected methods and properties can be accessed only within the class itself or by inherited classes. </li>
    <li><strong>private : </strong>Members declared as private may only be accessed by the class that defines the member. Private: Properties or methods declared as private are not allowed to be called from outside the class. However any method inside the same class can access them without a problem. In our Emailer class we have all these properties declared</li>
    <li>Note: The PHP 4 method of declaring a variable with the var keyword is still supported for compatibility reasons (as a synonym for the public keyword). In PHP 5 before 5.1.3, its usage would generate anE_STRICT warning.</li>
</ul>

<code>
<p>class MyClass</p>
<ul>
    <li>{</li>
    <li>public $public = 'Public';</li>
    <li>protected $protected = 'Protected';</li>
    <li>private $private = 'Private';</li>
    <li>
        function printHello()
        <ul>
            <li>{</li>
            <li>echo $this->public;</li>
            <li>echo $this->protected;</li>
            <li>echo $this->private;</li>
        <li>}</li>
    </ul>
    </li>
    <li>}</li>
</ul>
<p>$obj = new MyClass();</p>
<p>echo $obj->public; // Works</p>
<p>echo $obj->protected; // Fatal Error</p>
<p>echo $obj->private; // Fatal Error</p>
<p>$obj->printHello(); // Shows Public, Protected and Private</p>
<br><br>
<p>class MyClass2 extends MyClass</p>
<ul>
    <li>{</li>
    <li>// We can redeclare the public and protected method, but not private</li>
    <li>protected $protected = 'Protected2';</li>
    <li>
        function printHello()
        <ul>
            <li>{</li>
            <li>echo $this->public;</li>
            <li>echo $this->protected;</li>
            <li>echo $this->private;</li>
            <li>}</li>
        </ul>
    </li>
<li>}</li>
</ul>
<p>$obj2 = new MyClass2();</p>
<p>echo $obj2->public; // Works</p>
<p>echo $obj2->private; // Undefined</p>
<p>echo $obj2->protected; // Fatal Error</p>
<p>$obj2->printHello(); // Shows Public, Protected2, Undefined</p>
</code>
<?php include('../footer.php'); ?>