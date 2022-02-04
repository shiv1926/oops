<?php include('../header.php'); ?>

<h2>Getter and Setter Methods</h2>
<p>In this article, we learn the best way to create getter and setter strategies in PHP. Getter and setter strategies are utilized when we need to restrict the direct access to the variables by end-users. Getters and setters are methods used to define or retrieve the values of variables, normally private ones.</p>
<p>Just as the name suggests, a getter method is a technique that gets or recovers the value of an object. Also, a setter method is a technique that sets the value of an object.</p>
<p>Let's understand the use of getter and setter methods through an example.</p>
<code>
<p>class Person</p>
<ul>
   <li>{</li>
   <li>private $name;</li>
   <li>
      public function setName($name)
      <ul>
         <li>{</li>
         <li>$this->name = $name;</li>
         <li>}</li>
      </ul>
   </li>
   <li>
      public function getName()
      <ul>
         <li>{</li>
         <li>return $this->name;</li>
         <li>}</li>
      </ul>
   </li>
<li>}</li>
</ul>
<p>$person = new Person();</p>
<p>echo $person->name;</p>
<p>Output : PHP Error Cannot access private property Person::$name</p>
</code>
<p>In our Person class above, we have a private property called $name. Because it is private property, we are unable to access them directly like the above and that will produce a fatal error.</p>
<p>To run the code above and get our desired output Let's test this example.</p>
<code>
<p>class Person</p>
<ul>
   <li>{</li>
   <li>private $name;</li>
   <li>
      public function setName($name)
      <ul>
         <li>{</li>
         <li>$this->name = $name;</li>
         <li>}</li>
      </ul>
   </li>
   <li>
      public function getName()
      <ul>
         <li>{</li>
         <li>return 'welcome '. $this->name;</li>
         <li>}</li>
      </ul>
   </li>
   <li>}</li>
</ul>
<p>$person = new Person();</p>
<p>$person->setName('Alex');</p>
<p>echo $person->getName();</p>
<p>Output : welcome Alex</p>
</code>
<p>Here to give access to our private properties, we have made a "getter" function called getName, again because the visibility of the properties is set to private, you will likewise unable to change or modify their values. So, you should utilize one of the "setter" functions that we made: setName. After that, we have Instantiated our Person object.</p>

<h2>Accessor Methods</h2>
<p>Getter and Setter methods are also known as accessor methods.</p>
<p>Accessor methods are simply methods that are solely devoted to get and set the value of any class properties. It's a good practice to access class properties using accessor methods instead of directly setting or getting their value. Though accessor methods are the same as other methods, there are some conventions writing them.</p> 
<p>There are two types of accessor methods. One is called getter, whose purpose is returning value of any class property. The other is setter that sets a value into a class property. Let's see how to write the getter and setter methods for class properties:</p>
<code>
<p>class Student</p>
<ul>
<li>{</li>
<li>private $name; </li>
<li>private $roll;</li>
<li>
   public function setName($name)
   <ul>
   <li>{ </li>
   <li>$this->name= $name; </li>
   <li>} </li>
   </ul>
</li>
<li>
   public function setRoll($roll)
   <ul>
   <li>{ </li>
   <li>$this->roll =$roll; </li>
   <li>} </li>
   </ul>
</li>
<li>
   public function getName()
   <ul>
   <li>{ </li>
   <li>return $this->name; </li>
   <li>} </li>
   </ul>
</li>
<li>
   public function getRoll()
   <ul>
      <li>{ </li>
      <li>return $this->roll; </li>
      <li>}</li>
   </ul>
</li>
<li>}</li>
</ul>
</code>
<p>In the above example there are two getter methods and two setter methods. There is a convention in writing accessor methods. A setter method should start with set and the property name with the first character capitalized. A getter method should start with get followed by the variable name with the first letter capitalized. That means if we have a property named email,the getter method should be named as getEmail and the setter method should be named as setEmail. That's it. </p>
<p>So you might ask why someone does these extra jobs, when they can easily set these variables as public and leave everything else as is. Aren't all these the same? Well, no. Using accessor methods, you get some extra benefits. You will have full control while setting or retrieving the value of any property. "So what?" You might ask. Let's use a scenario where you need to filter users' input and set into properties. In this case, a setter can help you to filter the input before setting them into work. </p>
<p>Does this mean we have to write 100 getter and setter methods if my class contains 100 properties? You ask as good question. PHP is kind enough to relieve you from this boredom. How? Let us see the next section where we discuss using magic methods for setting and getting property values dynamically. Those methods will reduce the stress up to 90%. Don't you believe me? Let's see.</p>

<h2>Over loading : Using Magic Methods to Set/Get Class Properties</h2>
<p>Overloading in PHP provides means to dynamically "create" properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms "inaccessible properties" and "inaccessible methods" to refer to this combination of declaration and visibility.</p>
<p>All overloading methods must be defined as public.The function names __construct, __destruct, __call, __callStatic, __get, __set, __isset, __unset, __sleep,__wakeup, __toString, __invoke, __set_state and __clone are magical in PHP classes.</p>
<p>You cannot have functions with these names in any of your classes unless you want the magic functionality associated with them.</p>
<p>We discussed in the previous section that writing accessor method for a number of properties will be a real nightmare. To avoid that boredom, you can use magic methods. This process is called property overloading.</p>
<p>PHP5 introduced some magic methods in classes to reduce the pain of OOP in some cases. Two of those magic methods are introduced to set and get dynamic property values in a class. These two magic methods are named as __get() and __set(). Let us see how to use them: </p>
<code>
<p>class Student</p>
<ul>   
<li>{ </li>
<li>private $properties = array(); </li>
<li>
   function __get($property)
   <ul>
      <li>{ </li>
      <li>return $this->properties[$property]; </li>
      <li>} </li>
   </ul>
</li>
<li>
   function __set($property, $value)
   <ul>
      <li>{ </li>
      <li>$this->properties[$property]="AutoSet {$property} as: ".$value; </li>
      <li>}</li>
   </ul>
</li>
<li>}</li>
</ul>
<p>Now let us see the code in action. Use the class above with the following script:</p>
<p>$st = new Student();</p>
<p>$st->name = "Afif";</p>
<p>$st->roll = 16;</p>
<p>echo $st->name;</p>
<p>echo $st->roll;</p>
</code>
<p>When you execute the preceding code, PHP recognizes that "name" and "roll" does not exists in the class. Since the named property doesn't exist, the __set() method is called, which then assigns the value to the newly-created property of the class, allowing you to see the following output:</p>
<p>AutoSet name as: Afif</p>
<p>AutoSet roll as: 16</p>
<p>Seems quite interesting, huh? Using magic methods you still have full control over setting and retrieving property values in classes. Moreover, your class lost the "readability" and "maintainability" quite a lot. Why? See the code of previous Student class and new Student class and you will understand that for yourself.</p>
<?php include('../footer.php'); ?>