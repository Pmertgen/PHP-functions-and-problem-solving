<?php 
/* This one checks an input for its type and outputs either that it is an int or not.
*/

function TypeCheck($i) 
{

	if (intval($i) == 0) {

  	  echo "Bad String";

	} else {

    echo intval($i);

	}
}



/*
This class takes N, showing the number of integers and $a which is an array of integers. it then prints out the maximum difference between the integers (between the biggest and the smallest one).
*/
    class Difference{
    private $elements=array();
    public $maximumDifference;



function __construct($a) 
{        
    $this->elements = $a;            
}

function ComputeDifference()
{   
    $elements = $this-> elements;
    $length = count($elements) - 1;
    
    sort ($elements);
    
    $maximumDifference = $elements[$length] - $elements[0];
  
    print_r( $maximumDifference );
    
}

} 
     

$N = intval(fgets(STDIN));
$a = array_map('intval', explode(' ', fgets(STDIN)));
$d = new Difference($a);
$d-> ComputeDifference();
print ($d->maximumDifference);

/*
Given an integer,n , print its first 10 multiples. Each multiple n*i should be printed on a new line in the form: n x i = result.
*/

for ($i = 1; $i<= 10; $i++) {
    echo "$n x $i = " . $n*$i . "\n";
}