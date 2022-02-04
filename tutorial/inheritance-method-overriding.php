<?php include('../header.php'); ?>
<p>In inheritance there may be chances that parent and child class both can have methods with the same name. </p>
<ul>
    <li>If both the method have same name and same number of parameters, than it is known as method overriding.</li>
    <li>If both the method have same name but different number of parameters, than it is known as method overloading.</li>
</ul>

<h2>Methods Overriding</h2>
<p>Method overriding means method with the same name, same parameter list i.e. the signature of method must be same in parent and child class. In a subclass we can override any method either protected or public. If you declare any variable in subclass which is also available in superclass, then when you access that variable, the one from subclass will be accessed.</p>
<code>
    <table class="code_table">
        <tr>
            <td class="code_block">
<p>class parentclass</p>
<ul>
<li>{</li>
<li>
    public function __construct()
    <ul>
        <li>{</li>
        <li>echo 'constructor function of parent';</li>
        <li>}</li>
    </ul>
</li>
<li>
    public function first()
    <ul>
        <li>{</li>
        <li>echo 'function first from parent class';</li>
        <li>}</li>
    </ul>
</li>
<li>}</li>
</ul>
<div class="code_spacer"></div>
<p>class childclass extends parentclass</p>
<ul>
<li>{</li>
<li>
    public function __construct()
    <ul>
    <li>{</li>
    <li>echo 'constructor function of child';</li>
    <li>}</li>
    </ul>
</li>
<li>
    public function first()
    <ul>
        <li>{</li>
        <li>echo 'function first in child class';</li>
        <li>}</li>
    </ul>
</li>
<li>}</li>
</ul>
<div class="code_spacer"></div>
<p>$obj = new childclass();</p>
<p>$obj->first();</p>
            </td>
            <td class="code_block">
            </td>
        </tr>
    </table>
</code>

<h2>Preventing from Overriding</h2>
<li>If you declare any method as a final method, it can't be overridden in any of its subclass. So if you don't want someone to override your class methods, declare it as final. Let's take a look at the following example:</li>
<code>
    <p>class SuperClass</p>
    <ul>
        <li>{</li>
        <li>public final function someMethod()
            <ul>
                <li>{ </li>
                <li>//..something here </li>
                <li>}</li>
            </ul>
        </li>
        <li>}</li>
    </ul>
    <p>class SubClass extends SuperClass </p>
    <ul>
        <li>{</li>
        <li>public function someMethod()
            <ul>
                <li>{</li>
                <li>//..something here again, but it wont run </li>
                <li>}</li>
            </ul>
        </li>
        <li>}</li>
    </ul>
</code>
<p>If you execute the above code, it will generate a fatal error because class SubClass tried to override a method in SuperClass which was declared as final. Properties cannot be declared final, only classes and methods may be declared as final.</p>

<?php include('../footer.php'); ?>