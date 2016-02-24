<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Array Stack</h1>
<?php 
 class mystack{
   public $top=-1;//default: The stack is empty and the the top=-1
   public $maxsize=5;
   public $stack=array();
   public function  push($val)
   {
     if($this->top==$this->maxsize-1)
     {
         echo "<br/>Stack is full";
         return;
     }
    $this->top++;//0->1->2->.......
    $this->stack[$this->top]=$val;
   } 
   
   public  function pop()
   {
    if($this->top==-1)
       {
           echo "<br/>Stack is empty!!!!";
           return;
       }
       
     $topval=$this->stack[$this->top];
     $this->top--;
     return $topval;
   }
   
   
   public function showstack()
   {
       if($this->top==-1)
       {
           echo "<br/>Stack is empty!!!!";
           return;
       }
       
       for($i=$this->top;$i>-1;$i--)
       {
          echo '<br/>stack['.$i.']=' .$this->stack[$i];
       }
   }
     
     
   }
  $mystack=new mystack();
  $mystack->push('Superman');
  $mystack->push('Batmanman');
  $mystack->push('WonderWoman');
  $mystack->push('Flash');
  $mystack->push('Green Latern');
  $mystack->push('Cyborg');
  $mystack->push('SuperGirl');
  $mystack->push('Arrow');
  $mystack->showstack();
  echo "<br/>This is res after pop one ";
  $mystack->pop();
  $mystack->showstack();
  echo "<br/>This is res after pop another one ";
  $mystack->pop();
  $mystack->showstack();
  
?>
</body>