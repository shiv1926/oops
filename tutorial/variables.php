<?php include('../header.php'); ?>
<h2>Variables</h2>

<p>Variable are used to store the value, which may change in program. Variable is the name of memory location allocated by the compiler depending upon the datatype of the variable. Variable can be declared in multiple ways each with different memory requirements and functioning.</p>
<p>Variable must be declared before they are used. Usually it is preferred to declare them at the starting of the program.</p>
<p>Two basic operation with variables are Declaration and Initialization.</p>
<p>We can declare and initialize a variable at the same time, or can initialize later.</p>
<p>If a variable is declared and not initialized by default it will hold a garbage value. Also, if a variable is once declared and if try to declare it again, we will get a compile time error.</p>
<code>
    <p><strong>Only declaration of variable</strong></p>
    <p>var a, var b</p>
    <p>var a, b, c</p>
</code>
<code>
    <p><strong>Initialization of variable</strong></p>
    <p>a=1;</p>
    <p>b=1; c=1;</p>
</code>
<code>
    <p><strong>Declaration and initialization of variable at the same step</strong></p>
    <p>var a = 5; var b = 10;</p>
</code>

<?php include('../footer.php'); ?>