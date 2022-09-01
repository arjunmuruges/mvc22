<?php
class Books extends Database{
    public function binsert($postdata)
    {
        $bname=$postdata['bookname'];
        $bid=$postdata['bookid'];
        $btitle=$postdata['booktitle'];
        $bauthor=$postdata['bookauthor'];
        $bprice=$postdata['bookprice'];
$this->query("INSERT INTO library(bName,bId,bTitle,bAuthor,bPrice)
values('$bname','$bid','$btitle','$bauthor','$bprice')");
var_dump($this->resultSet());

    }  

    public function display()
    {
        $this-> query("select * from library");
        return $this->resultSet();
    }
}
// class Book1 extends Database{
//     public function linsert($postdata)
//     {
//         $username=$postdata['Username'];
//         $password=$postdata['Password'];
//         $this->query("INSERT INTO entrydata(username,passwordd)
//         values('$username','$password')");
//         var_dump($this->resultSet());
//     }

//     public function display1()
//     {
//         $this-> query("select * from entrydata");
//         return $this->resultSet();
//     }
// }
// ?>