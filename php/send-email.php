<?php
 include "connection.php";
 try{
    if(isset($_POST['send'])){
        
        $name=$_POST['name'] ;
        $email =$_POST['email'] ;
        $subject =$_POST['subject'] ;
        $sms =$_POST['message'] ;
       
        $query="INSERT INTO luming.client VALUES (?,?,?,?,?)";
        $Statement=$connection->prepare($query);
        $Statement->execute(array(null,$name,$email,$subject,$sms));
        $row = $Statement->rowCount();
           if($row>0){
            echo "<script>
            alert('Message Sent ');
            window.location.href='index.php';
            </script>";
           
        }
        else{
            echo "<Script>
                alert('Message not Sent...Try Again')
                window.location.herf='index.php'
            </Script>";
        }
      } 
 }

 catch(Exception $e){
    echo "Error: " .$e->getMessage();
}
      ?>