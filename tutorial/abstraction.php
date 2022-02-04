<?php include('../header.php'); ?>
<h2>Abtraction</h2>
<ul>
    <li>There are several situations where we want that a class and their direct child classes must have some functions, there functionaliy may be different for each class. so we just define that functions. </li>
    <li>Abstraction is the process of hinding unwated details and show only essential information to the users. there are several real life examples of abstraction, some of them mentioned below.
        <ul>
            <li>Your car is a great example of abstraction. You can start a car by turning the key or pressing the start button. You don’t need to know how the engine is getting started, what all components your car has. The car internal implementation and complex logic is completely hidden from the user.</li>
            <li>When we are making a call it only concatenate about the numbers and display that in screen,we really do not know how this connect with other number.</li>
            <li>We send data from Bluetooth we really do not know how it connect with other phone or devices.</li>
        </ul>
    </li>
    <li>In OOPS Abstraction is done by classes or interface.</li>
    <li><strong>ABSTRACT METHOD</strong> is a method that has just the method definition but does not contain implementation. A method without a body is known as an Abstract Method. We have to use 'ABSTRACT' keyword in method signature.</li>
    <li>Any class that contains at least one abstract method is known as abstract class.</li>
    <li>Abstract method and abstract class can not be declared as final, becuase abtract means, it has to be extended, and final means it can't be extend.</li>
    <li>An abstract class can have normal method also, with private, protected and public access modifiers.</li>
    <li>It is not allowed to create an instance of a class that has been defined as abstract.</li>
    <li>When we inheriting from an abstract class, all abstract method in the parent's class must be defined by the child. these methods must be defined with the same (or a less restricted ) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private.</li>
</ul>
<?php include('../footer.php'); ?>