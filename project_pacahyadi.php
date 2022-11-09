<h3> Zaki Abdilah Sudrajat XI-RPL </h3>
<?php
class Document {
    public $authors;
    public $date;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
}
$babi = new Document();
$babi-> setAuthors("Authors : Zaki");
$babi-> setDate("Tanggal Pembuatan : 29-10-2005");

echo $babi->getAuthors();
echo "<br>";
echo $babi->getDate();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$babi1 = new Book();
$babi1-> setTitle("Nama Buku : Banteng Merah");

echo $babi1->getTitle();
echo "<br>";
echo $babi->getAuthors();
echo "<br>";
echo "<hr>";

class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$babi2 = new Email();
$babi2-> setSubject("Menceritakan tentang : Konoha gakure ");

echo $babi2->getSubject();
echo "<br>";
echo $babi->getAuthors();
echo "<br>";
echo "<hr>";