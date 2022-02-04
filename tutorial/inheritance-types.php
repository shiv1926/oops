<?php include('../header.php'); ?>

<h2>inheritance types</h2>
<p>There are mainly 4 types of inheritance:</p>
<ul>
    <li>Single Inheritance</li>
    <li>Multi Level Inheritance</li>
    <li>Hierarchical Inheritance</li>
    <li>Multiple Inheritance (Through Interface)</li>
</ul>

<h6>PHP supports single inheritance, multi-level inheritance and heirarichal inheritance.</h6>

<ul>
    <li>
        <p>Single level inheritance : This is the most basic type of inheritance, For implementing single inheritance concept, we require two classes one as a parent and the other as a child.</p>
        <p> When a Derived Class to inherit properties and behavior from a single Base Class , it is called as single inheritance.</p>
        <img src="images/single-inheritance.png">
        <p>---------------------------------------------------------------------</p>
     </li>
    <li>
        <p>Multi-level inheritance : A derived class is created from another derived class is called Multi Level Inheritance .</p>
        <img src="images/multilevel.png">
        <p>---------------------------------------------------------------------</p>
    </li>
    <li>
        <p>Hierarchical inheritance :   More than one derived classes are created from a single base class, is called Hierarchical Inheritance .</p>
        <img src="images/hierarchical.png">
        <p>---------------------------------------------------------------------</p>
    </li>
    <li>
        <p>Multiple inheritance : PHP does not support multiple inheritance, but we can achieve this by using PHP interfaces. Multiple inheritances allows programmers to create classes that combine aspects of multiple classes and their corresponding hierarchies. In .Net Framework, the classes are only allowed to inherit from a single parent class, which is called single inheritance. More about.... Why in .NET multiple inheritance is not allowed </p>
        <img src="images/multiple.png">
    </li>
</ul>

<?php include('../footer.php'); ?>