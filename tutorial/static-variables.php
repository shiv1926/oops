<?php include('../header.php'); ?>
<h2>Static Variables</h2>
<p><strong>Static means stable</strong></p>
<p>The static keyword is used for memory management mainly.</p>
<p>The static variable gets memory only once, at the time of loading.</p>
<p>These static variables are stored on static storage area , not in stack.</p>
<p>Static variables are initialized & allocated storage only once at the beginning of program execution. A static variable retains its value until the end of program.</p>
<p>Static variables are memory efficient, i.e. they saves memory, because they allocate memory only once.</p>

<code>
<table width="100%" cellspacing="0" cellpadding="5" border="0">
<tr>
<td>
    <p>function check_static_value()</p>
    <ul>
    <li>{</li>
    <li>static $val = 0;</li>
    <li>echo $val;</li>
    <li>$val++;</li>
    <li>}</li>
    </ul>
</td>
<td>
<p><strong>If we call this function 5 times</strong></p>
<p>check_static_value();</p>
<p>check_static_value();</p>
<p>check_static_value();</p>
<p>check_static_value();</p>
<p>check_static_value();</p>
</td>
<td>
<p><strong>Output will be</strong></p>
<p>0</p>
<p>1</p>
<p>2</p>
<p>3</p>
<p>4</p>
</td>
</tr>
</table>
</code>

<h2>How to check, how many times a function called</h2>
<p>There are two way</p>
<code>
<table width="100%" cellspacing="0" cellpadding="5" border="0">
<tr>
<td valign="top" width="50%">
    <h2>With static keyword</h2>
    <p>function call_me() </p>
    <ul>
        <li>{</li>
        <li>static $call_me_count = 0;</li>
        <li>$call_me_count++;</li>
        <li>echo "You called this function : $call_me_count times";</li>
        <li>}</li>
    </ul>
    <p>call_me();</p>
    <p>call_me();</p>
    <p>call_me();</p>
    <p><strong>Output will be : You called this function : 3 times</strong></p>
</td>
<td width="50%">
    <h2>Without static keyword</h2>
    <p>writing a function that remembers how many times it has been called, we will use global variable</p>
    <p>&nbsp;</p>
    <p>$call_me_count = 0;</p>
    <p>function call_me() </p>
    <ul>
        <li>{</li>
        <li>global $call_me_count;</li>
        <li>$call_me_count++;</li>
        <li>echo "You called this function : $call_me_count times";</li>
        <li>}</li>
    </ul>
    <p>call_me();</p>
    <p>call_me();</p>
    <p>call_me();</p>
    <p><strong>Output will be : You called this function : 3 times</strong></p>
</td>
</tr>
</table>
</code>
<?php include('../footer.php'); ?>