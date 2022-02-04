<?php include('../header.php'); ?>

<h2>Inheritence</h2>
<ul>
    <li>One of the most important feature of oops is reusablity, and Inheritance is used for code reusability.</li>
    <li>One of the greatest features in OOP is that we can extend a class and create a completely new class. The new class can contain all the functionality of the parent class from which it is extended or can override. The new object can also introduce new features.</li>
</ul>
    
<h2>extends</h2>
<ul>
    <li>We use 'Extend' keyword to extend a new class from an existing class.</li>
    <li>
        <table border="1" cellspacing="0" cellpadding="5">
            <caption>class, child class and their synonyms</caption>
            <tr>
                <th>parent class</th><td>super class</td><td>base class</td>
            </tr>
            <tr>
                <th>child class</th><td>sub class</td><td>derived class</td>
            </tr>
        </table>
    </li>
    <li>when you extend a class, the subclass inherits all of the public and protected methods from the parent class. Unless a class overrides those methods, they will retain their original functionality.</li>
    <li>If you want to access any method of the parent class in child class, you can do this using parent keyword. For example, if you want to access a method named sayHello, you should write parent::sayHello();</li>
    <li>Instead of parent keyword we can also use the class name, for example vehicle::sayHello();</li>
    <li>You must remember that if the subclass has no constructor in it, the constructor from superclass will be invoked.</li>
    <li>A class can inherit the methods and properties of another class by using the keyword extends in the class declaration. It is not possible to extend multiple classes; a class can only inherit from one base class.</li>
    <li>The inherited methods and properties can be overridden by redeclaring them with the same name defined in the parent class. However, if the parent class has defined a method as final, that method can not be overridden.</li>
    <li>When overriding methods, the parameter signature should remain the same or PHP will generate an E_STRICT level error. This does not apply to the constructor, which allows overriding with different parameters.</li>
    <li>Unless autoloading is used, then classes must be defined before they are used. If a class extends another, then the parent class must be declared before the child class structure. This rule applies to class that inherit other classes and interfaces.</li>
    <li>there is no support for multiple inheritances at class level. This means you can't extend more than one class at a time. However multiple inheritance is supported in interfaces. An interface can extend an arbitrary number of other interfaces at a time. </li>
</ul>
<?php include('../footer.php'); ?>