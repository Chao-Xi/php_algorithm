<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Justice League</h1>
<hr/>
<a href="#">Add Hero</a>
<a href="#">alter Hero</a>
<a href="#">Del Hero</a>
<a href="#">Search Hero</a>
<br/>
<?php 
 class Hero{
    public $id;
    public $name;
    public $title;
    public $next;
    
    public function __construct($id='',$name='',$title='')
    {
        $this->id=$id;
        $this->name=$name;
        $this->title=$title;
    }
   } 
    //create a head node
    $head=new Hero();
    
    //create node function
     function create($head,$hero='')
     {   
         $flag=false;
         $cur=$head;
         while($cur->next!=null)
         {    
             if($cur->next->id>$hero->id)
             {
                 break;
             }elseif($cur->next->id==$hero->id)
             {
                 $flag=true;
                 echo "id repeat on ".$hero->id;
             }
             $cur=$cur->next;
//             $cur=$cur->next;
         } 
//          $cur->next=$hero;
            if($flag==false){
             $hero->next=$cur->next;
             $cur->next=$hero;
            }
     }
    
//create Heros
       $hero1=new Hero('1','Clark','SuperMan');
       create($head,$hero1);
       $hero5=new Hero('5','Barry','Flash');
       create($head,$hero5);
//     $head->next=$hero1;
       $hero2=new Hero('2','Bruce','BatMan');
       create($head,$hero2);
       $hero7=new Hero('2','Bruce','BatMan');
       create($head,$hero7);
       $hero4=new Hero('4','Hal','Green Latern');
       create($head,$hero4);
       $hero3=new Hero('3','Diana','WonderWoman');
       create($head,$hero3);
//link them together
//     $hero1->next=$hero2;
    
       
    function show($head)
    { 
      //copy a head;
      $cur=$head; 
      while($cur->next!=null)
      {
        echo "ID: ".$cur->next->id." Name: ".$cur->next->name." Title: ".$cur->next->title."</br>";
        $cur=$cur->next;
      } 
    }
    
    function del($head,$heroid)
    {
       $cur=$head;
       $flag=false;
       while($cur->next!=null)
       {
           if($cur->next->id==$heroid)
           {
               $flag=true;
               break;   
           }
           $cur=$cur->next;
       } 
       if($flag)
       {
           $cur->next=$cur->next->next;
       }else
       {
           echo "This id doesnt exist!";
           echo "</br>";
       }   
    }
    function update($head,$hero)
    {
       $cur=$head;
       while($cur->next!=null)
       {
           if($cur->next->id=$hero->id)
           {
               break;
           }
           $cur=$cur->next;
       }
       if($cur->next==null)
       {
           echo $hero->id."does not exist!";
           echo "</br>";
       }else
       {
           $cur->next->name=$hero->name;
           $cur->next->title=$hero->title;
       }
    }
    echo "<h1>"."Here are infos:"."</h1>";
    show($head);
    echo "<h1>"."Here are infos after DEL:"."</h1>";
    del($head,4);
    del($head,8);
    show($head);
    echo "<h1>"."Here are infos after Update:"."</h1>";
    $hero1=new Hero('1','Zed','General');
    update($head,$hero1);
    show($head);
    
?>
</body>
</html>