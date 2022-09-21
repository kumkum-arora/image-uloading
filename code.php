<?php
session_start();
class image
{

// connect with database
	  private $localhost ="localhost";
   	private $user ="root";
   	private $password ="";
   	private $dbname ="mydb3";
   	public $connection;
   	 
   	public function __construct()
   	 {	
        $this->connection = new mysqli($this->localhost,$this->user,$this->password,$this->dbname);
        if(mysqli_connect_error())
        {
           echo "not connected";
        }
       else
       {
         return $this->connection;
       }

   	}
   	//For Insert Data in backend
    public function insertdata($post)
    {
        $name=$this->connection->real_escape_string($_POST['name']);
        $email=$this->connection->real_escape_string($_POST['email']);
        $username=$this->connection->real_escape_string($_POST['uname']);
        $password=$this->connection->real_escape_string($_POST['password']);
        $query= "SELECT * FROM login where email='$email'";
        $result = $this->connection->query($query);
        $count=mysqli_num_rows($result);
        if($count>0)
        { 
          echo "<script>
                alert(' already Registered your Account');
                window.location.href='login.php';
                </script>";
        }
        else
        {   
          $query="insert into login(name,email,username,password) values('$name','$email','$username','$password')";
          $sql=$this->connection->query($query);
          echo "<script>
                alert('Registered Successfully');
                window.location.href='login.php';
                </script>";
        }
    }
    //login function
   public function Login($post)
    {
      $email= $_POST['email'];  
      $password = $_POST['password'];  
      $query="SELECT * FROM login WHERE email='$email' AND password = '$password'";
      $result=$this->connection->query($query);
       if($result->num_rows > 0)   
       {  
         $_SESSION['login'] = true;   
          return TRUE;  
       }  
       else  
       {  
        return FALSE;  
       }  
    }
//images upload
     public function upload($post)
    { 

      echo "helo";
      $title=$this->connection->real_escape_string($_POST['title']);
      $filename=$_FILES['image']['name'];
      $filepath=$_FILES['image']['tmp_name'];
      $imagename=explode(".",$filename);
      $ext=$imagename[1];
      $query="show table status like 'upload'";
      $result=$this->connection->query($query);
      $row=$result->fetch_assoc();
      $id=$row['Auto_increment'];
      $newfilename=$id.".".$ext;
      $query="insert into upload(image,title) values('$newfilename','$title')";
      $sql = $this->connection->query($query);
       if($sql==true)
      {
        echo "<script>
                alert('Successfully image uploaded');
                window.location.href='add.php';
                </script>";
        move_uploaded_file($filepath,"photos/".$newfilename);
        // header('location.upload.php');
      }
      else
      { 
        echo "failed to upload";
      }     
    }
// Display image
   public function displayData($post) 
    {
      $query = "select * from upload";
      $result=$this->connection->query($query);
      if($result->num_rows > 0)
      {
        $data=array();
        while ($row=$result->fetch_assoc())
        { 
          $data[]=$row;
        }
        return $data;
      }
      else
      {
        echo "no record found";
      }
    }  
    public function favourite($post)
    { 
      
    }


}


?>



