<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Josephus Problem</h1>
<p>People are standing in a circle waiting to be executed. Counting begins at a specified point in the circle and proceeds around the circle in a specified direction. After a specified number of people are skipped, the next person is executed. The procedure is repeated with the remaining people, starting with the next person, going in the same direction and skipping the same number of people, until only one person remains, and is freed.

The problem — given the number of people, starting point, direction, and number to be skipped — is to choose the position in the initial circle to avoid execution.</p>
<hr/>
<?php 
 class People
 {
     public $id;
     public $next=null;
     
     public function __construct($id)
     {
         $this->id=$id;
     }   
 }
  //4 people in the circle
  $first=null;
  $n=1000;
  
  function addpeople(&$first,$n)
  {
      $cur=null;
      for($i=0;$i<$n;$i++)
      {
          $people=new People($i+1);
          if($i==0)
          {
              $first=$people;
              $first->next=$people;
              $cur=$first;
          }else {
              $cur->next=$people;
              $people->next=$first;
              $cur=$cur->next;
          }
      }
      
  }
  
  function showpeople($first)
  {
     $cur=$first;
     //Did not get the end of the circle
     while ($cur->next!=$first)
     {
         echo "<br/>The id of the people in circle is: ".$cur->id;
         $cur=$cur->next;
     } 
     //The last child;
     echo "<br/>The id of the people in circle is: ".$cur->id;
  }
   $m=2;//count to 2
   $k=2;//start from 2
   function count_people($first,$m,$k)
   {
       $tail=$first;
       while($tail->next!=$first)
       {
           $tail=$tail->next;
       }
       //start from k
       for($i=0;$i<$k-1;$i++)
       {
           $tail=$tail->next;
           $first=$first->next;
       }
       echo "<hr/>";
       while($tail!=$first)
       {   
           //$i<1 count 2
           //$i<2 count 3
           for($i=0;$i<$m-1;$i++)
           {
               $tail=$tail->next;
               $first=$first->next;
           }
           //del
           
           echo "<br/>The people will be executed is: ".$first->id;
           $first=$first->next;
           $tail->next=$first;
           
           }
      echo "<hr/>The last people left in the circle is: ".$tail->id;
   }
  addpeople($first, $n);
  showpeople($first);
  count_people($first,$m,$k);
?>
</body>
</html>