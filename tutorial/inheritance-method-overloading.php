<?php include('../header.php'); ?>

<h2>Methods Overloading</h2>
<p>Method overloading means method with the same name, but parameter are different. PHP does not support method overloading, to achieve method overloading we use __call magic method.</p>
<p>__call() : when we try to call a method which does not exist or private in the class, this magic function invoked automatically.</p>
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
        <li>public final function someMethod($param1)
            <ul>
                <li>{ </li>
                <li>//..something here </li>
                <li>}</li>
            </ul>
        </li>
        <li>}</li>
    </ul>
    <p>Using this way method overloading is not possible in php</p>
</code>

<h2>Possible way of method overloading</h2>
<code>
    <p>class superClass</p>
    <ul>
        <li>{</li>
        <li>function __call($fn_name, $params)
            <ul>
                <li>{</li>
                <li>
                    if($fn_name=='count_params')
                    <ul>
                        <li>{</li>
                        <li>
                            switch(count($params))
                            <ul>
                                <li>{</li>
                                <li>case 1 : return '1 parameter'; break;</li>
                                <li>case 2 : return '2 parameter'; break;</li>
                                <li>case 3 : return '3 parameter'; break;</li>
                                <li>}</li>
                            </ul>
                        </li>
                        <li>}</li>
                    </ul>
                </li>
                <li>}</li>
            </ul>
        </li>
        <li>}</li>
    </ul>
    <p>$obj = new superClass();</p>
    <p>echo $obj->count_params('a'); // it will show '1 parameter'</p>
    <p>echo $obj->count_params('a','b'); // it will show '2 parameter'</p>
    <p>echo $obj->count_params('a','b','c'); // it will show '3 parameter'</p>
    <p>Using this way we can overload methods</p>
</code>

<?php include('../footer.php'); ?>