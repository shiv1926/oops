<?php include('../header.php'); ?>
<ul>
    <li>An object is a real-world entity.</li>
    <li>An object is a runtime entity.</li>
    <li>whenever we write some thing like this $object = new classname(); you actually create an instance of object class.</li>
    <li>Whenever we create an object by calling its constructor, it will be called an instance.</li>
    <li>You must initiate an object before using it. After initiating, you can access all its public properties and methods using "-></li>
    <li>The object is an entity which has state and behavior.</li>
    <li>The object is an instance of a class.</li>
</ul>
<code>
    <p>$emailerobject = new Emailer("hasin@pageflakes.com");</p>
    <p>$emailerobject->addRecipients("hasin@somewherein.net");</p>
    <p>$emailerobject->setSubject("Just a Test");</p>
    <p>$emailerobject->setBody("Hi Hasin, How are you?");</p>
    <p>$emailerobject->sendEmail();</p>
</code>
<ul>
    <li>In the above code piece, we first created an instance of Emailer class to a variable name $emailerobject in the first line. Here, there is something important to note: We are supplying a sender address while instantiating this: </li>
    <li>$emailerobject = new Emailer("hasin@pageflakes.com");</li>
    <li>Remember we had a constructor method in our class as __construct($sender). When initiating an object, we said that the constructor method is called automatically. So while initiating this Emailer class we must supply the proper arguments as declared in the constructor method. For example the following code will create a warning: </li>
</ul>
<?php include('../footer.php'); ?>