<?php include('../header.php'); ?>
<h2>Interface</h2>
<ul>
    <li>Interface specifies the lists of all such methods that a class must implement.</li>
    <li>in php we can not create multiple inheritance, to achive multiple inheritance we use interface.</li>
    <li>Interface is an empty class which contains only the declaration of methods. So any class which implements this interface must contain the declared functions in it. So, interface is nothing but a strict ruling, which helps to extend any class and strictly implement all methods defined in interface. A class can use any interface by using the implements keyword. Please note that in interface you can only declare methods, but you cannot write their body. That means the body of all methods must remain blank. </li>
    <li>So why is an interface necessary, you might ask? One of the reasons is it implies strict rules while creating a class. For example, we know that we need to create some driver classes in our application, which can handle DB operations. For MySQL, there will be one class, for PostgreSQL there will be another, For SQLite, another one and so forth. Now your developer team has three developers, who will separately create these three classes.</li>
    <li>Now how will it be if each of them implements their own style in their own classes? The developers who are going to use those driver classes will have to check how they define their methods and following that, the way they have to write their code, which is too boring and hard to maintain. So if you define that, all driver class must have two methods named connect() and execute(). Now developers need not worry while changing the driver, because they know that all these classes have the same method definition. Interface helps in this scenario. Let's create the interface here:</li>
</ul>
<code>
<p>interface DBDriver</p>
<ul>
    <li>{ </li>
    <li>public function connect(); </li>
    <li>public function execute($sql);</li>
    <li>}</li>
</ul>
</code>
<p>Did you notice that the functions are empty in an interface? Now let's create our MySQLDriver class, which implements this interface:</p>
<code>
<p>class MySQLDriver implements DBDriver</p>
<ul>
    <li>{</li>
    <li>}</li>
</ul>
</code>
<p>Now if you execute the code above, it will give the following error because MySQLDriver class has no connect() and execute() function as defined in the interface. Let's run the code and read the error:</p> 
<p>Fatal error</b>: Class MySQLDriver contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (DBDriver::connect, DBDriver::execute)</p>
<p>Well, now we have to add those two methods in our MySQLDriver class. Let's see the code below:</p>
<code>
<p>class MySQLDriver implements DBDriver</p>
<ul>
    <li>{</li>
    <li>
        public function connect() 
        <ul>
            <li>{</li>
            <li>}</li>
        </ul>
    </li>
    <li>
        public function execute() 
        <ul>
            <li>{</li>
            <li>}</li>
        </ul>
    </li>
    <li>}</li>
</ul>
</code>
<p>If we run the code now, we get the following error message again:  <b>Fatal error</b>: Declaration of MySQLDriver::execute() must be compatible with that of DBDriver::execute()</p>
<p>The error message is saying that our execute() method is not compatible with the execute() method structure that was defined in the interface. If you now take a look at the interface, you will find that execute() method should have one argument. So that means whenever we implement an interface in our class, every method structure must exactly be the same as defined in the interface.</p>
<?php include('../footer.php'); ?>