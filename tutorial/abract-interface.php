<?php include('../header.php'); ?>
<h2>When interface and when abstract classes</h2>

<p>whenever we need multiple inheritance and we have very clear about that we have only the design and not the implementation; we should use interface. but if we don’t need multiple inheritance but you need a mix of design plan and pre-implementation then abstract class is your choice.</p>

<p>In abstract classes only we can extend only one class at a time i.e. we can achieve only single level inheritace, while in interface we can implement mulitple classes, i.e. we can achieve here multiple inheritance. </p>

<p>Abstract class are "extended", while interface are "implemented".</p>

<p>In abstract classes we can define variables, becuase abstract classes are defined as normal classes. but in interface we can not define member variables, if we define variables in interface it give us fatal error.</p>

<p>In abstract classes we can define private and protected method also, but in interface we can not create private and protected methods. Interface can have only public functions and all the functions must be available in child classes. but in abstract classes it is not mandatory.</p>

<p>If the extended classes have some methods with common functionalities, then you can define those functions in an abstract class.</p>

<p>In abtract classes we can implement abstract method also, but in interface we just define the functions.</p>

<p>So if you need multiple inheritance and a clear blueprint than has only the design and not the implementation; you go for interface. If you don’t need multiple inheritance but you need a mix of design plan and pre-implementation then abstract class is your choice.</p>

<h2>Difference between abstract Class and Interface</h2>
<table border="1" cellpadding="5" cellspacing="0" class="table table-bordered">
    <tbody>
        <tr><th>Interface</th><th>Abstract Class</th></tr>
        <tr>
            <td>An interface cannot have concrete methods in it i.e. methods with definition.</td>
            <td>An abstract class can have both abstract methods and concrete methods in it.</td>
        </tr>
        <tr>
            <td>All methods declared in interface should be public</td>
            <td>An abstract class can have public, private and protected etc methods.</td>
        </tr>
        <tr>
            <td>Multiple interfaces can be implemented by one class.</td>
            <td>One class can extend only one abstract class.</td>
        </tr>
    </tbody>
</table>
<?php include('../footer.php'); ?>