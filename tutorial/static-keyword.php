<?php include('../header.php'); ?>
<h2>Static Classes and Static Members / Static Keyword</h2>
<ul>
<li>Whenever we create methods and varaibles in a class, they are related to their object. But static methods and properties are not related to object.  They are directly related to class. we can not access static methods and properties using object.</li>
<li>In oops most of the time we use methods and properties with object, but some time we need to use methods and properties in the context of a class. for such methods and properties we use static keyword.</li>
<li>You have already seen that to access any method or attribute in a class you must create an instance (i.e. using new keyword, like $object = new emailer()), otherwise you can't access them. But there is a difference for static methods and properties. You can access a static method or property directly without creating any instance of the class. A static member is like a global member for that class and all instances of that class . Also, static properties persist the last state of what it was assigned, which is very useful in some cases.</li>
<li>Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.</li>
<li>Static properties cannot be accessed through the object using the arrow operator ->.</li>
<li>the pseudo-variable $this is not available inside the static method. we use self:: to access static variables.</li>
</ul>

<ul>
<h2>When to use static methods and properties</h2>
<li>If a logic that can be shared by multiple instances of the class, you can extract the code and put it into a static method.</li>
<li>The static variable can be used to refer to the common property of all objects, for example, the company name of employees, college name of students, etc.</li>
</ul>

<code>
<table border="0" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <td width="50%" valign="top">
            <p>class Foo</p>
            <ul>
            <li>{</li>
            <li>public static $my_static = 'foo';</li>
            <li>
                public function staticValue()
                <ul>
                <li>{</li>
                <li>return self::$my_static;</li>
                <li>}</li>
                </ul>
            </li>
            <li>}</li>
            </ul>
            <p>class Bar extends Foo</p>
            <ul>
            <li>{</li>
            <li>
                public function fooStatic()
                <ul>
                <li>{</li>
                <li>return parent::$my_static;</li>
                <li>}</li>
                </ul>
            </li>
            <li>}</li>
            </ul>
        </td>
        <td width="50%" valign="top">
            <h6>Results</h6>
            <ul>
            <li></li>
            <li>echo Foo::$my_static;</li>
            <li>$foo = new Foo();</li>
            <li>echo $foo->staticValue();</li>
            <li>echo $foo->my_static;</li>
            <li>echo $foo::$my_static;</li>
            <li>$classname = 'Foo';</li>
            <li>echo $classname::$my_static;</li>
            <li>echo Bar::$my_static;</li>
            <li>$bar = new Bar();</li>
            <li>echo $bar->fooStatic();</li>
            <li></li>
            </ul>
        </td>
    </tr>
</table>
</code>


<code>
<p>class DBManager</p>
<ul>
<li>{</li>
<li>public static function getMySQLDriver()</li>
<li>{</li>
<li>//instantiate a new MySQL Driver object and return</li>
<li>}</li>
<li>public static function getPostgreSQLDriver()</li>
<li>{</li>
<li>//instantiate a new PostgreSQL Driver object and return</li>
<li>}</li>
<li>public static function getSQLiteDriver()</li>
<li>{</li>
<li>//instantiate a new MySQL Driver object and return</li>
<li>}</li>
<li>}</li>
</ul>
<p>$dbdriver = DBManager::getMySQLDriver();</p>
<p>//now process db operation with this $dbdriver object</p>
</code>
How do we use this class? You can access any static property using a :: operator and not using the -> operator. Let's see the example below: 
<li>Notice that we didn't create any instance of DBManager object like $dbmanager = new DBManager(). Rather we directly access one of its methods using the :: operator.</li>
<li>Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static can not be accessed with an instantiated class object (though a static method can).</li>
<li>Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static.</li>
<li>Static properties cannot be accessed through the object using the arrow operator ->.
Calling non-static methods statically generates an E_STRICT level warning.</li>
<li>Like any other PHP static variable, static properties may only be initialized using a literal or constant; expressions are not allowed. So while you may initialize a static property to an integer or array (for instance), you may not initialize it to another variable, to a function return value, or to an object.</li>
<li>As of PHP 5.3.0, it's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static).</li>

<p><strong>PHP static methods are often used in utility classes of  PHP frameworks. A utility class is a class that contains only static methods.</strong></p>

<?php include('../footer.php'); ?>