<?php include('../header.php'); ?>

<h2>Namespace</h2>
<ul>
<li>when we create large applications or integrate third-party libraries in our code, then there may be chances of conflicts between class names or function names, to resolve this conflicts, we use namespaces.</li>
<li>Namespaces are folder like structure. we use folder to organise our files and to avoid name conflicts. As we can not create two files with the same name in a folder, like that we can not create two function with same name in the class, or two classes with same name in a project.</li>
<li>Folders are used to group related files, similiarly namespaces are used to group related classes, functions and constant.</li>
<li>To access any file from folder we must prepand the folder name before file name, similarly we prepand namespace before class name.</li>
<li>by default all our code is in global namespace.</li>
</ul>

<h2>Defining / Declaretion of namespace</h2>
<ul>
<li>Namespaces are declared using the namespace keyword.</li>
<li>A namespace must be declared at the top of the php code, and all the code must be exist in namespace, i.e. no code can exist after closing braces of namespace. </li>
<li>If you want to put some code in global namespace after defining a namespace, just write namespace and below this write your code.</li>
<li>Let see the example how to create an object of a classes created in namespace.</li>
<li>There are two ways to declare namespace with bracket or without bracket.</li>
</ul>
<code>
  <table class="code_table">
    <tr>
      <td class="code_block">
<p>namespace abc</p>
<ul>
<li class="not_neccessary">{</li>
<li>
  class xyz
  <ul>
    <li>{</li>
    <li>
      function __construct()
      <ul>
      <li>{</li>
      <li>echo 'This is xyz class in abc namespace.';</li>
      <li>}</li>
      </ul>
    </li>
    <li>}</li>
  </ul>
</li>
<li>$xyz = new xyz();</li>
<li class="not_neccessary">}</li>
</ul>
<div class="code_spacer"></div>
<p>namespace def</p>
<ul>
  <li>{</li>
  <li>
    class xyz
    <ul>
      <li>{</li>
      <li>
        function __construct()
        <ul>
          <li>{</li>
          <li>echo 'This is xyz class in def namespace.';</li>
          <li>}</li>
        </ul>
      </li>
      <li>}</li>
    </ul>
    <li>$xyz = new xyz();</li>
    <li>use abc\xyz as aaa;</li>
    <li>$obj1 = new aaa();</li>
  </li>
  <li>}</li>
</ul>
<div class="code_spacer"></div>
<p>namespace</p>
<ul>
  <li>{</li>
  <li>Now you can write your code here, it will in global namespace.</li>
  <li>
    class xyz
    <ul>
      <li>{</li>
      <li>}</li>
    </ul>
  </li>
  <li>}</li>
</ul>
<div class="code_spacer"></div>
<h6>Below is the example of nesting of namespaces</h6>
<p>Namespace myproject</p>
<ul>
  <li>{</li>
  <li>
    Namespace database
    <ul>
      <li>{</li>
      <li>
        class xyz
        <ul>
          <li>{</li>
          <li>}</li>
        </ul>
      </li>
      <li>}</li>
    </ul>
  </li>
  <li>}</li>
</ul>
      </td>
      <td class="code_block">
        <ul class="explanation">
          <li>It is not neccessary to put curly braces with namespace.</li>
          <li>We can write as many namespace as we want but we should write only one namespace in one php file.</li>
          <li>We should always create seprate file for each namespace and, when use this namespace, we use "use" keyword.</li>
          <li>In namespace "def" we are accessing the "xyz" class from namespace "abc", for this we are using "use" keyword. </li>
          <li>use abc\xyz as aaa; here abc\xyz is the namespace, this namespace may be more longer, we can short a namespace using alias. we use "as" keyword for aliasing.</li>
          <li>We can create nesting of namespaces</li>
          <li>We can create sub namspace using \ (forward slash).</li>
          <li>echo __NAMESPACE__; it is used to get the name of current namespace.</li>
        </ul>
      </td>
    </tr>
  </table>
</code>
<h2>How to use/include namespace</h2>
<code>
  <table class="code_table">
    <tr>
      <td class="code_block">
        <p>namespace abc;</p>
        <p>class xyz </p>
        <ul>
          <li>{</li>
          <li>
          function __construct()
            <ul>
            <li>{</li>
            <li>echo "This is xyz class in abc namespace.";</li>
            <li>}</li>
            </ul>
          </li>
        <p>}</p>
        </ul>
      </td>
      <td class="code_block">
        <p>include('class.namespace2.php');</p>
        <p>//$obj = new abc\xyz();</p>
        <p>use abc\xyz as aa;</p>
        <p>$obj = new aa();</p>
      </td>
    </tr>
  </table>
</code>

<?php include('../footer.php'); ?>