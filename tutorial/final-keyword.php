<?php include('../header.php'); ?>

<h2>Preventing from Extending</h2>
<p>Similar to a final method, you can declare a class as final, which will prevent anyone from extending it. So if you declare any class, as shown in following example, it is no more extensible. </p>
<code>
    <p>final class aclass</p>
    <ul>
        <li>{</li>
        <li>}</li>
    </ul>
    <p>class bclass extends aclass</p>
    <ul>
        <li>{</li>
        <li>}</li>
    </ul>
</code>
<p>If you execute the code above, it will trigger the following error: <b>Fatal error</b>: Class bclass may not inherit from final class (aclass)</p>

<?php include('../footer.php'); ?>