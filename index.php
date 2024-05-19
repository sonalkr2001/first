<?php
    //echo "sonal kumar";
   // variable .
    /*  $f =100;
        $F=20;
        echo $f;
        echo $F;
        $f=30;
        echo $f;
    */

    // concatination opearation using(.)dot operator in php
    
    /*    $fName="sonal";
        $lName=" kumar";
        echo $fName.$lName;
        $fname=" ram";
        $lName=" tech";
        echo $fname.$lName." Hello"." Everyone";
    */

    // Use of Arithmetic operators 
    /*  $a=10;
        $b=5;
        $d=8;
        $e=9;
        $c=$a+$b;
        echo "add 10+5= \t". $c;
        $c=$a-$b;
        echo "\n sub 10-5= \t". $c;
        $c=$a * $b;
        echo "\n Mul 10*5= \t". $c;
        $c=$a / $b;
        echo "\n div 10/5= \t". $c;
        $b=3;
        $c=$a % $b;
        echo "\n Mod 10%3= \n". $c;
        $d++;
        echo "\n ++ Post increment op= \t" .$d;
        $e--;
        echo "\n Post Dcrement op= \t" .$e;
    */
    // var_dump() return the boolean value on console.
    // of comparison operator (var_dump) is used for seen  returning value on console.
    /*    $a=15;
        $b=10;
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>$b);
        var_dump($a<$b);
        var_dump($a>=$b);
        var_dump($a<=$b);
    */

    // Logical operator in php.
    /*  $a=1;
        $b=0;
        $c=$a && $b; // And
        var_dump($c);
        $d=$a || $b; // or
        var_dump($d);
        $e=!$b; // not
        var_dump($e);
        // ternary operator
        $x=7;
        $x>5 ? $flag="yes" : $flag="no";
        echo $flag;
        var_dump($flag);
    */
    // Assignment operator.
    /*  $a=5;
        $b=6;
        $a+=$b;
        echo $a."\t" ;
        $a-=$b;
        echo $a. "\t";
        $a*=$b;
        echo $a. "\t";
        $a/=$b;
        echo $a. "\t";
    */
    // conditional statment in php.
    // 1. if-else
    /*    $age=20;
        if($age>=18)
        {
            echo "they can do vote \n ";
            echo "\n testing";
        }
        else
        {
            echo "they are under age.";
        }
    */
    // 2. if- elseif anf nested if.
    /*
      $age=17;
      if($age>=18)
        {
            echo "they can do vote \n ";
            echo "\n testing";
        }
        elseif($age>=17)
        {
            echo "please wait one year for vote.";
        }
        else
        {
            echo "you are under age";
        }
    */
    // nested if
    /*   $age=70;
        if($age>=18)
        {
            if($age<=65)
            {
                echo ("you can vote");
            }
            else
            {
                echo ("you are over age");
            }
        }
        else
        {
            echo ("you are under age please wait");
        }
    */
    // Array in php.
    //array() fn is used  to create an array in php.
    // for arranging/formatting  the array  output we use  html "<pre> "</pre>" tag.
    // three types 1. index array(with numeric index) 2. Associativity array(with string index) 3. multidimensional array.
    //1. index array
    /* $arr1=array("car1","car2","car3","car4");
        // print full array.
        echo "<pre>";
        print_r($arr1);
        echo "</pre>";
        // for particular value.
        echo $arr1[1];
        // for new value of array at the last.
        $arr1[4]="car5";
        print_r($arr1);
    */

    // 2. Associativity array(it work on key- value mechanism).
    /*  $arr2=array
            (
                "name"=> "sonal kumar",
                "city"=> "patna",
                "degree"=>"mca"
            );
        // for new value in array.
        $arr2["company"]=>"nobody";
        // print the array.
        echo "<pre>";
        print_r($arr2);
        echo "</pre>";
    */
    // Multidimensional array.
    /*    $arr3=array
            (
                "name"=> "sonal kumar",
                "city"=> "patna",
                "degree"=>"mca",
                "contact"=>array("6201643568","7903384882","7634090333"),
            );
            // print the array.
            echo "<pre>";
            print_r($arr3);
            echo "</pre>";
    */
    // 2nd method to craeta array.
    //1. index array
    /*      $arr4=[1,2,3,4,5,6,77];
            // print the array.
            echo "<pre>";
            print_r($arr4);
            echo "</pre>";
            // 2. multidimensional array.
            $arr5=[1,2,3,[4,55,66],77,88];
            // print the array.
            echo "<pre>";
            print_r($arr5);
            echo "</pre>";
            // 3. Associativity array
            $arr6=["name"=>"sonal ","city"=>"patna",["contact"=>["country_code"=>"+91","+90","+89"],"63037484994","474637737"]];
            // print the array.
            echo "<pre>";
            print_r($arr6);
            echo "</pre>";
            // array function.
            1.print_r() -> print the array value as output.
            2.is_array() -> check the given value is an array or not return boolean value.
            3.array_slice() -> divide the given array into many parts that pass as argument. 
            4.array_chunk() -> it return the array value after given index.
            5.array_search() -> it search the value in array and return their index value.
            6.array_pop() -> return the last value of that array.
            7.array_push() -> add the new  value at last position of that array
            8.array_key_exist() -> check the key value exist or not in that array.
            9.array_merge() -> used to merger two array and form new array.
            10.count() -> count no of element in that array.
            11.array_keys() -> return the key value from that array.
            12.array_count_values() 
    */
    // Function in php.
    // function will be creating using function function-name(){}.
        // 1. declear or define function.
        /*    function sum()
            {
                $c=20+30;
                echo "sum =\t" .$c;
            }
        */
        // 2. call the function .
        //    sum();
        // note when we return some value from fun then we call the fn with echo keyword to print the output.
        /*    function add()
            {
                return 30+30 ."<br/>";
            }
        */
            // call the fn.
        //    echo add();
            // return keyword tells the fun it is last statement for execution. if we write some code after return statement then that code will not executed.
            // two type of function in php.
            // 1. predefine fun -> the func that define at the time of making php programming lang .
            // 2. user define -> the func which is created by user according to their need .
            //ex of user define fn .
        /*    function vote($age)
            {
                if($age>18 && $age<65)
                {
                    echo "you can vate"."<br/>";
                }
                else
                {
                    echo "you are under age"."<br/>";
                }
            }
            // call the function vote.
            vote(2);
        */
    // loop in php.1. while loop 2. do-while loop 3.for loop 4. foreach loop. 
            // 1.while loop.
                /*    $i=0;
                    while($i<10)
                    {
                        echo  $i."<br/>";
                        $i++;
                    }
                    echo "loop ends <br/>";
                */
            // 2. for loop
                /*
                    for ($i=1;$i<=10;$i++)
                    {
                        echo $i."<br/>";
                    }
                */
            // 3. do-while loop
                /*
                    $j=1;
                    do
                    {
                        echo $j."<br/>";
                        $j++;
                    }while($j<10);
                */
            // 4. for-each loop -> it is used to traverse the array.
                /*
                    $ar1=array(
                        "html" => 2500,
                        "c" =>1000,
                        "java" => 5000,
                        "python" => 3000,
                    );
                    foreach($ar1 as $course => $fee)
                    {
                        echo " the fee of $course is $fee <br/> ";
                    }
                */
    // Switch case statement in php.
        /*
            $k=8;
            switch($k)
            {
                case 1:
                    echo "variable k is equal to 1";
                    break;
                case 2:
                    echo "variable k is equal to 2";
                    break;
                case 3:
                    echo "variable k is equal to 3";
                    break;
                case 4:
                    echo "variable k is equal to 4";
                    break;
                case 5:
                    echo "variable k is equal to 5";
                    break;
                default:
                    echo "value of k is greater or invalid";
                    break;
            }
        */
    // recursion using function=> when a func call itself is called recursion.
            
        /*    function countnumber($start)
            {
                if($start <=10)
                {
                    echo $start."<br/>";
                    $start++;
                    countnumber($start);
                }
                else 
                {
                    return;
                }
            }
            countnumber(1);
        */
    // implode() and explode() method in php.
    // implode() convert into string value from  an array. syntax => implode(seperator,array); in place of seperator we pass couma,space,any more.
        /*
            $arr5=['1','2','3','4'];
            $str=implode(',',$arr5);
            echo $str."<br/>";
        */
    // Explode() convert string to an array elemnt that means reverse of implode(). syntax(seperator,string,limit);
        /*   $str="A,B,C,D,E,F";
            echo $str."<br/>";
            $arr=Explode(',',$str);
            echo "<pre>";
            print_r($arr);
        */
    // case changing method of string.
        /*  1.strtolower() => convert a  string into lower case value.
            2.strtoupper() => convert a string into upper case value.
            3.lcfirst() => convert first character of string into lower case value.
            4.ucfirst() => convert first character of string into upper case value.
            5.ucwords() => convert first character of each word into upper case letter.
        */
        /*    $str="WsCuBe tech teach carefulluy";
            echo strtolower($str."<br/>");
            echo strtoupper($str."<br/>");
            echo lcfirst($str."<br/>");
            echo ucfirst($str."<br/>");
            echo ucwords($str);
        */
    // str_replace()=> this method is used to replace the any character or substr  of string with new character. str_replace("old character","new character",string name)
            // for character
        /*  $strg="Shashi";
            echo str_replace('a','o',$strg."<br/>");
            // for string.
            $s1="this is sonal";
            echo str_replace('sonal','krishna',$s1."<br/>");
            // for word
            $s2="this is programming langyage";
            echo str_replace('programming language','java',$s2);
        */
    // strrev() => it reverse the string value.
        /*    $str1="sonal";
              echo strrev($str1);
              echo strrev("kumar");
        */
    // substr()=> it return the a part of string value. substr(string,start,length)
            /*$   st="sonal kumar";
                  echo substr($st,2,6);
                  echo substr($st,-2);  // it print from right(last).
            */
    // rand()=> for genrating random no. rand(startno,lastno)
        //    echo rand(1,5);
        //      echo rand(1000,9999);// for genrating random otp 4 digit .
    // ceil() => it return the maximum value of that decimal no.
    // ceil(5.2)=>6,ceil(5.5)=> 6, ceil(5.8)=>6
    // floor()=> it return the least integer value from that decimal no.
    // floor(5.2)=>5, floor(5.6)=>5, floor(5.8)=>5.
    // getDate()=> return all detail of date and time ,year in array format.
        /*  echo "<pre/>";
            print_r (getDate());
        */
    // date_default_timezone_set()=> it is used to set date and time zone of your country.
    // date_default_timezone_get()=> it is used to get date and time  of your country.
           // date_default_timezone_set("ASIA/KOLKATA");

    // date() & time() in php.
    //date()=> return the formetted local date.
            //echo date('d');
    //time()=> return the current time.
            //echo time()/60/60/365;
       
            
        
            

     

                    
            

        

    



    

?>