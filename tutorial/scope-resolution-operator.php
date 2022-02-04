<?php include('../header.php'); ?>
<h2>scope resolution operator / Context Resolution Operator</h2>
<ul>
    <li>The double colon is a scope resolution operator (::)</li> 
    <li>Scope resolution operator is used to access static methods, static properties, constant, method and properties from parent class using parent keyword or class name with double colon(::) and overridden methods or properties.</li>
    <li>Two special keywords self and parent are used to access properties or methods from inside the class definition.</li>
</ul>
<code>
<table border="0" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <td width="50%" valign="top">
            <p>Class A</p>
            <ul>
            <li>{</li>
            <li>const CONSTANT_VAR='I am constant.';</li>
            <li>public static static_var = 'parent name is parent';</li>
            <li>
                public function exmaple()
                <ul>
                <li>{</li>
                <li>return 'This is example function in parent class.';</li>
                <li>}</li>
                </ul>
            </li>
            <li>
                public static function exmaple2()
                <ul>
                <li>{</li>
                <li>return 'This is example of static function in parent class.';</li>
                <li>}</li>
                </ul>
            </li>
            <li>}</li>
            </ul>
            <p>&nbsp;</p>
            <p>Class B Extend A</p>
            <ul>
            <li>{</li>
            <li>
                public function exmaple()
                <ul>
                    <li>{</li>
                    <li>return 'This is example function in child class.';</li>
                    <li>}</li>
                </ul>
            </li>
            <li>}</li>
            </ul>
        </td>
        <td width="50%" valign="top">
            <ol class="example_list">
                <li>
                    <p><strong>How to access constant</strong></p>
                    <p>A::CONSTANT_VAR; /* Class name :: contant name */</p>
                </li>
                <li>
                    <p><strong>How to access static variable and static function in the same class</strong></p>
                    <p>self::static_var; /* self :: static variable name */</p>
                    <p>self::exmaple2(); /* self :: function name */</p>
                </li>
                <li>
                    <p><strong>How to access static variable and static function in derived class</strong></p>
                    <p>We can use both parent keyword or parent class name</p>
                    <p>parent::static_var; /* parent:: static variable name */</p>
                    <p>parent::exmaple2(); /* parent:: function name */</p>
                    <p>A::static_var; /* A:: static variable name */</p>
                    <p>A::exmaple2(); /* A:: function name */</p>
                </li>
            </ol>
        </td>
    </tr>
</table>
</code>
<?php include('../footer.php'); ?>