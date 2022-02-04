<?php include('../header.php'); ?>
<h2>Traits</h2>
<ul>
<li>PHP doesn’t support multiple inheritances i.e. we can not inherit a class from two or more classes, but there are several situation where we want to inherit properties and methods from multiple classes. but this is not possible with inheritance, therefore we use trait.</li>
<li>Traits are used to overcome the problems of single inheritance. As we know in single inheritance class can only inherit from one other single class.</li>
<li>Traits are similar to class.</li>
<li>We can’t instantiate a trait like classes.</li>
<li>Trails are used to reuse a set of methods in several independent classes.</li>
<li>We use "use" keyword to use traits in a class.</li>
<li>Traits can use other traits.</li>
<li>We can use multiple trailts in a class using "Use" keyword.</li>
</ul>

<h2>trait vs class</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th class="code_block">Class</th>
        <th class="code_block">Traits</th>
    </tr>
    <tr>
        <td>We use "Class" keyword to create class.</td>
        <td>We use "Trait" keyword to create trait.</td>
    </tr>
    <tr>
        <td>In Class we can define properties and methods both.</td>
        <td>In Trait we can define properties and methods both.</td>
    </tr>
    <tr>
        <td>We can create an instance of classes.</td>
        <td>We can not create an instance of traits.</td>
    </tr>
</table>
<code>
    <table class="code_table">
        <tr>
            <td class="code_block">
<p>trait Trait1</p>
<ul>
    <li>{</li>
    <li>public $property1 = 'first Property';</li>
    <li>
        public function first()
        <ul>
        <li>{</li>
        <li>return "This is first function in Trait1 \n";</li>
        <li>}</li>
        </ul>
    </li>
    <li>}</li>
</ul>
<div class="code_spacer"></div>
<p>class class1</p>
<ul>
    <li>{</li>
    <li>use Trait1;</li>
    <li>}</li>
</ul>
<p>$obj1 = new class1();</p>
<p>echo $obj1->first();</p>
<p>echo $obj1->property1;</p>
            </td>
            <td class="code_block">
            </td>
        </tr>
    </table>
</code>

<h2>Multiple trait / Name collision resolve / Aliasing trait method</h2>
<code>
    <table class="code_table">
        <tr>
            <td class="code_block">
                <p>trait Trait1</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function first()
                        <ul>
                        <li>{</li>
                        <li>return "This is first function in Trait1 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from trait1 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>trait Trait2</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function second()
                        <ul>
                        <li>{</li>
                        <li>return "This is first function in Trait2 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from trait2 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>trait Trait3</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function third()
                        <ul>
                        <li>{</li>
                        <li>return "This is third function in Trait3 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from trait3 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>class class1</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function example()
                        <ul>
                            <li>{</li>
                            <li>echo "Example function.";</li>
                            <li>}</li>
                        </ul>
                    </li>
                    <li>
                        use Trait1, Trait2, Trait3
                        <ul>
                            <li>{</li>
                            <li>Trait1::first as Tfirst;</li>
                            <li>Trait2::first as Tsecond;</li>
                            <li>Trait3::first as Tthird;</li>
                            <li>Trait1::first insteadof Trait2, Trait3;</li>
                            <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <p>$obj1 = new class1();</p>
                <p>echo $obj1->first();</p>
                <p>echo $obj1->second();</p>
            </td>
            <td class="code_block">
                <ul class="explanation">
                    <li>Here we are using multiple traits in a class. When we use multiple traits there may be chances that trait have methods with same name.</li>
                    <li>When traits have methods with same name, a conflict occur, to resolve conflicts, we use aliasing.</li>
                    <li>There are two keywords we use to resolve conflicts.</li>
                    <li>keyword "as".</li>
                    <li>keyword "insteadof".</li>
                    <li>In our example we have rename all 3 test function from all traits. but the actual function test still exists and we can call this. therefore we have to use this function from atleat one trait insteadof all traits.</li>
                </ul>
            </td>
        </tr>
    </table>
</code>

<h2>Overriding trait method / Precedence order</h2>
<p>When child class and parent class both have the method with same name, than method overriding and method overloading occurs.</p>
<code>
    <table class="code_table">
        <tr>
            <td class="code_block">
                <p>trait Trait1</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from trait1 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>Class baseclass</p>
                <ul>
                    <li>{</li>
                    <li>use Trait1;</li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from baseclass \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>Class childclass extends baseclass</p>
                <ul>
                    <li>{</li>
                    <li>
                        public function test()
                        <ul>
                        <li>{</li>
                        <li>return "This is test function from childclass \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>$obj = new childclass();</p>
                <p>$obj->test();</p>
            </td>
            <td class="code_block">
                <ul class="explanation">
                    <li>This example will output - this is test function from childclass</li>
                    <li>first preference is given to the method from child class, than method from trail and at the last prefrence is given to the method from parent class.</li>
                </ul>
            </td>
        </tr>
    </table>
</code>

<h2>Access modifiers in traits</h2>
<p>we use access modifier in class to define accessibity level of properties and methods, similarly we can use access modifiers in traits. we can overwrite accessibity level of trait's method in class.</p>
<code>
    <table class="code_table">
        <tr>
            <td class="code_block">
                <p>trait Trait1</p>
                <ul>
                    <li>{</li>
                    <li>
                        private function test()
                        <ul>
                        <li>{</li>
                        <li>echo "This is test function from trait1 \n";</li>
                        <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>Class baseclass</p>
                <ul>
                    <li>{</li>
                    <li>
                        use Trait1
                        <ul>
                            <li>{</li>
                            <li>Trait1::test as public testTrait1;</li>
                            <li>}</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
                <div class="code_spacer"></div>
                <p>$obj = new parentclass();</p>
                <p>$obj->testTrait1();</p>
            </td>
            <td class="code_block">
                <ul class="explanation">
                    <li>in this example we have overwrite the access modifier and also rename the method name.</li>
                </ul>
            </td>
        </tr>
    </table>
</code>

<h2>interface VS traits</h2>
<ul>
    <li>The main difference between the Traits and Interfaces in PHP is that the Traits define the actual implementation of each method within each class, so many classes implement the same interface but having different behavior, while traits are just chunks of code injected in a class in PHP.</li>
</ul>

<?php include('../footer.php'); ?>