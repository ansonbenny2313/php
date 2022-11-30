<?php 

$assarry=array(
    "name"=>"anso","age"=>20,"marks"=>50
);
echo "<br>";
echo $assarry['marks'];

foreach ($assarry as $ele){
    echo $ele;
    echo "<br>";
}

array_pop($assarry);
echo "<hr><h1>New array after poping</h1>";
foreach ($assarry as $ele){
    echo $ele;
    echo "<br>";
}

array_push($assarry,2,"hello","he");
array_push($assarry,32);

shuffle($assarry);

echo "<hr><h1>New array after shuffling</h1>";
foreach ($assarry as $ele){
    echo $ele;
    echo "<br>";
}
echo "<hr><h1>Class and objects</h1>";
class student{
    public$name;
    public$age;
    public$marks;

    function student($name,$age,$marks){
        $this->name=$name;
        $this->age=$age;
        $this->mark=$marks;

    }


    }
    $obj =new student('ans',24,55);
    $obj->name="anso";
    echo $obj->name;

?>