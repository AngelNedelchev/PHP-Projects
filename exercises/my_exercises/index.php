<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP build in functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Build in functions PHP</h1>
    </header>
<div class="wrapper">
    <table id="table">

        <tr>
            <th>rand()</th>
            <th>Generate random number</th>
        </tr>

        <tr>
                <th>rand(1,20)</th>
                <th>Generate random number between 1 and 20 inclusive 1 and 20</th>
        </tr>
        
        <tr>
                <th>str_pad()</th>
                <th> Pad a string to a certain length with another string</th>
        </tr>
        
        <tr>
                <th>strtoupper()</th>
                <th>Makes a string uppercase.</th>
        </tr>
            
        <tr>
                <th>strtolower()</th>
                <th>Make a string lowercase.</th>
        </tr>
        
        <tr>
                <th>ceil()</th>
                <th>Returns the next highes integer value by rounding up value if necessary.</th>
        </tr>
        
        <tr>
                <th>pi()</th>
                <th>Get value of pi (you can als use M_PI).</th>
        </tr>
        
        <tr>
                <th>getrandmax()</th>
                <th>Shows largest possible random value. <br>
                    Returns the maximum value that can be returned by call to round().
                </th>
        </tr>
        
        <tr>
                <th>rand()</th>
                <th>Generate a random integer. <br>
                    rand(3,9) : this will return a number between 3 and 9 inclusief 3 and 9.        
            </th>
        </tr>
        
        <tr>
                <th>abs()</th>
                <th>Returns absolute value of a number. <br>
                    abs(-5.3) = 5.3        
            </th>
        </tr>
        
        <tr>
                <th>round()</th>
                <th>Rounds a float. <br>
                    round(3.4) = 3
                    round(3.6) = 4
                    round(1.95583, 2) = 1.96
            </th>
        </tr>
        
        <tr>
                <th>substr_count()</th>
                <th>Count the number of string occurences.</th>
        </tr>
        
        <tr>
                <th>strrev()</th>
                <th>Reverse a string.</th>
        </tr>
    
        <tr>
                <th>str_repeat()</th>
                <th>Repeats a string <br>
                    str_repeat($string, 3) : string will repeat 3 times.        
            </th>
        </tr>
        
        <tr>
                <th>gettype()</th>
                <th>Get the type of a variable.</th>
        </tr>
        
        <tr>
                <th>var_dump()</th>
                <th>Dumps information about a variable.</th>
        </tr>
        
        <tr>
                <th>array()</th>
                <th>Creates an array.</th>
        </tr>
        
        <tr>
                <th>count()</th>
                <th>Counts all elements in an array or something in an object.</th>
        </tr>
            
        <tr>
                <th>print_r()</th>
                <th>Prints human readable info about a variable.</th>
        </tr>
            
        <tr>
                <th>implode()</th>
                <th>Join array elements with a string <br>
                    echo implode("," , $array) <br>
                    output: element, element, element, ...
            </th>
        </tr>
            
        <tr>
                <th>array_pop()</th>
                <th>Remove the element off the end of array.</th>
        </tr>
            
        <tr>
                <th>array_push()</th>
                <th>Push one or more elements into the end of an array.</th>
        </tr>
            
        <tr>
                <th>array_shift()</th>
                <th>Remove an element off the beginning of an array.</th>
        </tr>
            
        <tr>
                <th>array_unshift()</th>
                <th>Add one or more elements to the beginning of an array.</th>
        </tr>
            
        <tr>
                <th>unset()</th>
                <th>Unset a given variable.</th>
        </tr>
        
    </div>

</table>
</body>
</html>