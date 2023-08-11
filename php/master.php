<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 $link=mysqli_connect('localhost','root','','rock');
   if (isset($_POST['type'])) {
   
    $type=$_POST['type'];
    if ($type=="home") {
      $query=mysqli_query($link,"SELECT * FROM products");
      $query11=mysqli_query($link,"SELECT * FROM products order by id desc limit 5 ");
      $query1=mysqli_query($link,"SELECT * FROM orders GROUP BY ref HAVING COUNT(ref) = 1");
      $query2=mysqli_query($link,"SELECT * FROM orders GROUP BY ref HAVING COUNT(ref) = 1 and status ='pending'");
      $query3=mysqli_query($link,"SELECT SUM(total) as totall FROM orders GROUP BY ref HAVING COUNT(ref) = 1 ");
      $query33=mysqli_query($link,"SELECT * FROM orders GROUP BY ref HAVING COUNT(ref) = 1 ORDER BY id limit 5");
      $c=mysqli_num_rows($query);
      $c1=mysqli_num_rows($query1);
      $c2=mysqli_num_rows($query2);
      $c3=0;
      while ($fr=mysqli_fetch_assoc($query3)) {
        $c3=$fr['totall'];
      }
      
    ?>
   <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Products</h4>
                          </div>
                          <div class="card-body">
                            <?php echo $c;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                          <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Orders</h4>
                          </div>
                          <div class="card-body">
                             <?php echo $c1;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                          <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Pending Orders</h4>
                          </div>
                          <div class="card-body">
                           <?php echo $c2;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                          <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Gross</h4>
                          </div>
                          <div class="card-body">
                            NGN
                           <?php echo $c3;  ?>
                          </div>
                        </div>
                      </div>
                    </div>                  
                  </div>
                  <div class="row mt-5">
                    <div class="col-sm-6">
                      <center><h4>New products</h4></center>
                      <?php
                      while ($res=mysqli_fetch_array($query11)) {
                        

                        ?>
                          <div class=" card p-4 mb-2" style="cursor: pointer;" onclick="qedit(<?php echo $res['id'];   ?>)">
                            <p><b><?php echo $res['name'];  ?></b></p>
                            <span><?php echo $res['adate'];  ?></span>
                          </div>

                        <?php
                      }


                      ?>
                    </div>
                    <div class="col-sm-6">
                      <center><h4>New orders</h4></center>
                      <?php
                      while ($res=mysqli_fetch_array($query33)) {
                        

                        ?>
                          <div class=" card p-4 mb-2" style="cursor: pointer;" onclick="qedit1(<?php echo $res['id'];   ?>)">
                            <p><b><?php echo $res['ref'];  ?></b></p>
                            <span><?php echo $res['adate'];  ?></span>
                          </div>

                        <?php
                      }


                      ?>
                    </div>
                  </div>

    <?php
    }
        if ($type=='listings') {
      
?>

<div class="container" style="padding-top: 50px">
  <div class="row">
    <div class="col-sm-6" style="cursor: pointer;"  onclick="add()">
      <div class=""  style="background: white; padding: 30px; border-radius: 5px;">
        <center>Add Products <br> <span class="iconify" data-icon="ant-design:folder-add-filled" data-inline="false" data-width="100"></span></center>
      </div>
    </div>
    <div class="col-sm-6" style="cursor: pointer;" onclick="manage()">
      <div class="" style="background: white; padding: 30px; border-radius: 5px;">
        <center>Manage Products<br><span class="iconify" data-icon="ic:sharp-manage-accounts" data-inline="false" data-width="100"></span>

        </center>
      </div>
    </div>
  </div>
</div>
<?php



    }
    if ($type=="addlistings") {
      ?>
<center><h3 class="mb-5">Add Products</h3></center>
<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
          <form method="post" action="" id="gcpr">
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                <label>Product Name</label>
                <input type="¨text" name="title" class="form-control">
              </div>
              <div></div>
              <div class="container-fluid p-0 mb-1">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Price</label>
                <input type="¨text" name="price" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Room</label>
                <select class="form-control" name="room">
                  <option value="KIT">KIT </option>
                  <option value="PRODUCT"> PRODUCT</option>
              
                </select>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="container-fluid p-0 mb-4">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Color1</label>
                <input type="text" name="color1" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                         <label>Color2</label>
                <input type="text" name="color2" class="form-control">
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                         <label>Color3</label>
                <input type="text" name="color3" class="form-control">
                    </div>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                   
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                         <label>Price2</label>
                <input type="text" name="price2" class="form-control">
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                         <label>Price3</label>
                <input type="text" name="price3" class="form-control">
                    </div>
                  </div>
                </div>
                
              </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-3">
                <center>
                  <div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
                    <div class="user-image mb-3 text-center">
                          <div class="imgGallery" id="imgGallery"> 
                            <!-- Image preview -->
                          </div>
                          
                        </div>
                         <center>
                       <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>    
                          </center>

                <input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
                </center>
              
              </div>
                </div>
              </div>
            </div>
              
              
              <div class="form-group mb-3">
                <textarea class="summernote" id="summernote"></textarea>
              </div>
              <center><button class="btn btn-primary btn-lg" style="width: 70%" onclick="submitL()" type="button">Add Listing</button></center>
          </form>

          
                   
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

      <?php
    }

    if ($type=="manage") {
      ?>

<center>
  <h3 class="mb-5">Manage Products</h3>
  <div class="container mb-5" style="width: 60%">
    <div class="row">
      <div class="col-sm-10 p-0">
        <input type="text" name="" id="searchinp" class="form-control" placeholder="search by unique id number e.g 12314325356">
      </div>
      <div class="col-sm-2 p-0">
        <button class="btn btn-danger" onclick="search(document.getElementById('searchinp').value)">
          <span id="ui"></span>
          <span class="iconify" data-icon="ant-design:file-search-outlined" data-inline="false" data-width="30"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="result" id="result">
      
    </div>
  </div>
</center>
      <?php



    }
if ($type=="insertL") {
$title=$_POST["title"];
$price=$_POST["price"];
$price2=$_POST["price2"];
$price3=$_POST["price3"];
$room=$_POST["room"];
$color1=$_POST["color1"];
$color2=$_POST["color2"];
$color3=$_POST["color3"];

$details=$_POST["details"];






  $uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['chooseFile']['name']))) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                  if ($id==0) {
                    
                     $insert = mysqli_query($link,"INSERT INTO products  VALUES('','$title','$price','$details','$color1','$color2','$color3','$uploadDate','$room','$fileName','','','','','no','$price2','$price3')");
                          
                  
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                  }
                  else{
                    $squery=mysqli_query($link,"SELECT * FROM products order by id desc limit 1");
                    while ($anss=mysqli_fetch_array($squery)) {
                      $did=$anss['id'];
                    }
                    $nid=$id + 1;

                     $insert = mysqli_query($link,"UPDATE  products set image".$nid." = '$fileName' where id='$did'");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                  }

                   
                }
            }

        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );

        }
        echo $response["status"];
}

if ($type=="searchL") {
  
$id=$_POST["id"];

$query=mysqli_query($link,"SELECT * from products where id='$id'");
while ($res=mysqli_fetch_array($query)) {
  

$title=$res["name"];
$price=$res["price"];
$room=$res["room"];
$color1=$res["color1"];
$color2=$res["color2"];
$color3=$res["color3"];
$price2=$res["price2"];
$price3=$res["price3"];

$details=$res["description"];

?>
<div id="summ" style="display: none;">
  <?php echo $details  ?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
          <form method="post" action="" id="gcpr">
            <div class="container-fluid p-0">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                <label>Title</label>
                <input type="¨text" name="title" class="form-control" value="<?php echo $title  ?>">
              </div>
              <div></div>
              <div class="container-fluid p-0 mb-1">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Price</label>
                <input type="¨text" name="price" class="form-control" value="<?php echo $price  ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                  <label>Room</label>
                <select class="form-control" name="room">
                  <option value="<?php echo $room  ?>"><?php echo $room  ?></option>
                  <option value="KIT">KIT</option>
                  <option value="PRODUCT">PRODUCT</option>
                
                </select>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="container-fluid p-0 mb-4">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Color1</label>
                <input type="text" name="color1" class="form-control" value="<?php echo $color1  ?>">
                    </div>
                  </div>
                 <div class="col-sm-4">
                    <div class="form-group">
                      <label>Color2</label>
                <input type="text" name="color2" class="form-control" value="<?php echo $color2  ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Color3</label>
                <input type="text" name="color3" class="form-control" value="<?php echo $color3  ?>">
                    </div>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                   
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                         <label>Price2</label>
                <input type="text" name="price2" class="form-control" value="<?php echo $price2  ?>">
                    </div>
                  </div>
                   <div class="col-sm-4">
                    <div class="form-group">
                         <label>Price3</label>
                <input type="text" name="price3" class="form-control" value="<?php echo $price3  ?>">
                    </div>
                  </div>
                </div>
                
              </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-3">
                <center>
                  <div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
                    <div class="user-image mb-3 text-center">
                          <div class="imgGallery" id="imgGallery"> 
                            <!-- Image preview -->
                          </div>
                          
                        </div>
                         <center>
                       <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>    
                          </center>

                <input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
                </center>
              
              </div>
                </div>
              </div>
            </div>
              
              
              <div class="form-group mb-3">
                <textarea class="summernote" id="summernote"></textarea>
              </div>
              <center><button class="btn btn-primary btn-lg" style="width: 40%" onclick="updateL(<?php echo $id; ?>)" type="button">Update Product</button> <button class="btn btn-danger btn-lg" style="width: 40%" onclick="

                var data='type=delete&id=<?php echo $id;  ?>';

     var th=this;
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
                           iziToast.success({
    title: 'Listing Deleted!',
    message: 'Great Job',
    position: 'topRight'
  });
                           th.disabled=true;
     }
  xhr.send(data);

              " type="button">Delete product</button></center>
          </form>

          
                   
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>


<?php

}






}


if ($type=="updateL") {
$title=$_POST["title"];
$price=$_POST["price"];
$room=$_POST["room"];
$color1=$_POST["color1"];
$color2=$_POST["color2"];
$color3=$_POST["color3"];
$price3=$_POST["price3"];
$price2=$_POST["price2"];

$details=$_POST["details"];

$fid=$_POST["id"];




  $uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
      
          
          if (!empty($_FILES['chooseFile']['name'])) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                  if ($id==0) {
                    
                     $insert = mysqli_query($link,"UPDATE products set name='$title',price='$price',room='$room',color1='$color1' ,color2='$color2',color3='$color3', price2='$price2',price3='$price3' , description='$details',image1='$fileName' where id='$fid'");
                          
                  
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                  }
                  else{
                    $squery=mysqli_query($link,"SELECT * FROM products order by id desc limit 1");
                    while ($anss=mysqli_fetch_array($squery)) {
                      $did=$anss['id'];
                    }
                    $nid=$id + 1;

                     $insert = mysqli_query($link,"UPDATE  products set image".$nid." = '$fileName' where id='$fid'");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                  }

                   
                }
            }

        }
        
         else {
           

            $insert = mysqli_query($link,"UPDATE products set name='$title',price='$price',room='$room',color1='$color1',color2='$color2',color3='$color3', price2='$price2',price3='$price3' ,description='$details' where id='$fid'");
                          
                  
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
           

        }
        echo $response["status"];
        
}

if ($type=="delete") {
  $id=$_POST['id'];
  mysqli_query($link,"DELETE from products where id='$id'");
}
if ($type=="house") {
    $query1=mysqli_query($link,"SELECT * FROM products order by id desc");
    $query2=mysqli_query($link,"SELECT * FROM products order by id desc");
    $query3=mysqli_query($link,"SELECT * FROM products order by id desc");
    $query4=mysqli_query($link,"SELECT * FROM products order by id desc");


  ?>
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <form action="" method="post" id="frmp">
     
        <div class="form-group container mb-2">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
               <label>F1</label>
          <select class="form-control" name="f1" id="f1">
            <?php 

while ($res=mysqli_fetch_array($query1)) {
    ?>
<option value="<?php  echo $res['id'];  ?>"> <?php  echo $res['id'];  ?></option>
                  

    <?php
  }


             ?>
          </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                      <div class="form-group">
               <label>F2</label>
          <select class="form-control" name="f2" id="f2">
            <?php 

while ($res=mysqli_fetch_array($query2)) {
    ?>
<option value="<?php  echo $res['id'];  ?>"> <?php  echo $res['id'];  ?></option>
                  

    <?php
  }


             ?>
          </select>
              </div>
              </div>
            </div>
            <div class="col-sm-6">
                     <div class="form-group">
               <label>F3</label>
          <select class="form-control" name="f3" id="f3">
            <?php 

while ($res=mysqli_fetch_array($query3)) {
    ?>
<option value="<?php  echo $res['id'];  ?>"> <?php  echo $res['id'];  ?></option>
                  

    <?php
  }


             ?>
          </select>
              </div>
            </div>
            <div class="col-sm-6">
                     <div class="form-group">
               <label>F4</label>
          <select class="form-control" name="f4" id="f4">
            <?php 

while ($res=mysqli_fetch_array($query4)) {
    ?>
<option value="<?php  echo $res['id'];  ?>"> <?php  echo $res['id'];  ?></option>
                  

    <?php
  }


             ?>
          </select>
              </div>
            </div>
          </div>
        </div>
<center><button class="btn btn-primary" type="button" style="width: 50%" onclick="addf()">Submit</button></center>
      </form>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
  <?php
}
if ($type=="addf") {
 
  $f1=$_POST["f1"];
  $f2=$_POST["f2"];
  $f3=$_POST["f3"];
  $f4=$_POST["f4"];

mysqli_query($link,"UPDATE products set featured='yes' where id='$f1'");
mysqli_query($link,"UPDATE products set featured='yes' where id='$f2'");
mysqli_query($link,"UPDATE products set featured='yes' where id='$f3'");
mysqli_query($link,"UPDATE products set featured='yes' where id='$f4'");





}
if ($type=='orders') {
$query=mysqli_query($link,"SELECT DISTINCT ref , id FROM orders order by id desc");
  ?>
<div class="accordion" id="accordionExample">



  <?php

 while($res=mysqli_fetch_array($query)){
$ref=$res['ref'];
$refw=$res['id'];


 $query1i=mysqli_query($link,"SELECT * FROM orders where id='$refw' ");
  while ($res1i=mysqli_fetch_array($query1i)) {
 $status=$res1i['status']; 
$adate=$res1i['adate'];
  }

  $query1=mysqli_query($link,"SELECT * FROM saddress where ref='$ref' ");
  while ($res1=mysqli_fetch_array($query1)) {
  $name=$res1['name'];
  $email=$res1['email'];
  $phone=$res1['phone'];
  $address=$res1['address'];
  }
  ?>


  <div class="card">
    <div class="card-header" id="headingOne<?php  echo $res['ref'];   ?>">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne<?php  echo $res['ref'];   ?>" aria-expanded="true" aria-controls="collapseOne" style="color: inherit; text-decoration: none; font-weight: bolder; font-size: .5em">
    <span style="font-weight: normal;">Order Id: </span>  <?php  echo $res['ref'];   ?>  | <span style="font-weight: normal;">Date: </span> <?php  echo $adate;   ?>   | <span style="font-weight: normal;">Customer: </span>  <?php  echo $name   ?>
        </button>
      </h2>
    </div>

    <div id="collapseOne<?php  echo $res['ref'];   ?>" class="collapse" aria-labelledby="headingOne<?php  echo $res['ref'];   ?>" data-parent="#accordionExample">
      <div class="card-body">
       
<center><h3>Order Items</h3></center>
<?php
$query3=mysqli_query($link,"SELECT * FROM orders where ref='$ref' ");
  while ($res3=mysqli_fetch_array($query3)) {
  $pid=$res3['product'];
  $quantity=$res3['quantity'];
   $total=$res3['total'];

  $query4=mysqli_query($link,"SELECT * FROM products where id='$pid' ");
  while ($res4=mysqli_fetch_array($query4)) {
 
?>

<div class="form-group mb-2 mt-5">
  <div class="row">
    <div class="col-sm-3"><img src="../images/<?php echo $res4['image1']  ?>" class="img-fluid"></div>
    <div class="col-sm-3"><?php echo $res4['name']  ?> -- <?php echo $res3['color']  ?></div>
    <div class="col-sm-3">


      <?php if ($res3['color'] !=='') {
      
        if ($res3['color'] == $res4['color2']) {
        echo $res4['price2'] ;
        }
        if ($res3['color'] == $res4['color3']) {
        echo $res4['price3'] ;
        }
       
      }  ?> x <?php echo $quantity  ?> </div>
    <div class="col-sm-3"><?php $total  ?></div>
  </div>
</div>

<?php



}
}
 $query30=mysqli_query($link,"SELECT SUM(total) as totall FROM orders where ref='$ref'   ");
      while ($fr=mysqli_fetch_array($query30)) {
        $c3=$fr['totall'];
      }
  
?>
<button class="btn btn-secondary mb-5" style="float: right; margin-right: 30px; color: black"> Total: NGN  <?php echo $c3  ?>  </button>


<center><h3 class="mb-4" style="margin-top: 100px">Shipping Address</h3>
<div class="form-group mb-5">
  <div class="row" style="width: 60%">
    <div class="col-sm-4"><?php echo $name ?></div>
     <div class="col-sm-4"><?php echo $email ?></div>
      <div class="col-sm-4"><?php echo $phone ?></div>
  </div>
</div>

<div class="form-group mb-3">
  <center>
    <label>Address</label>
     <textarea style="width: 70%" class="form-control" readonly="">
    <?php echo $address ?>
  </textarea>
  </center>
  </center>
 
</div>
<center>
  <p class="mt-5 " > <span style="font-weight: bolder;">  Status:</span> <span id="omo<?php echo $ref ?>"><?php echo $status ?></span> </p>
  <button class="btn btn-secondary mb-5"   onclick="oaction('processing','<?php echo $ref ?>','<?php echo $phone  ?>'); document.getElementById('omo<?php echo $ref ?>').innerHTML='processing';"> Processing</button>  <button class="btn btn-primary mb-5"  onclick="oaction('delivery_in_progress','<?php echo $ref ?>','<?php echo $phone  ?>'); document.getElementById('omo<?php echo $ref ?>').innerHTML='delivery in progress';"> Delivery In Progress</button><button class="btn btn-success  mb-5" onclick="oaction('delivered','<?php echo $ref ?>','<?php echo $phone  ?>'); document.getElementById('omo<?php echo $ref ?>').innerHTML='delivered';"> Delivered</button>
</center>
      </div>
    </div>
  </div>




  <?php
 }

  ?>
 
  
</div>

  <?php

 

}

if ($type=='oaction') {
 
 $action=$_POST['action'];
 $ref=$_POST['ref'];
  $phone=$_POST['phone'];
 mysqli_query($link,"UPDATE orders set status='$action' where ref='$ref'");

  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=Vd4FpMaa3owrF4SpJj9M5inylokapsKqVJhg2nwG8S6Wiu6Iy2lBSGvm7XEF&from=RockasEmp&to=".$phone."&body=RockasEmpire%0D%0AYour%20Order%20:".$ref."%20status%20has%20been%20updated%20to%20".$action."%0D%0Arockasempire.com&dnd=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",

 
    
   
));

$response = curl_exec($curl);

curl_close($curl);

}
if ($type=='password') {

$query30=mysqli_query($link,"SELECT * FROM login ");
      while ($fr=mysqli_fetch_array($query30)) {
        $c3=$fr['password'];
      }
  ?>

<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
     <div class="col-sm-8">
       <center><h3 class="mb-5">Change password</h3></center>
       <form>
         <div class="form-group">
           <div class="row">
             <div class="col-sm-12 mb-3">
               <label>Old Password</label>
               <input type="password" id="old" class="form-control">
             </div>
             <div class="col-sm-6 mb-3">
               <label>New Password</label>
                 <input type="password" id="new" class="form-control">
             </div>
              <div class="col-sm-6 mb-3">
               <label>Retype Password</label>
                 <input type="password" id="new1" class="form-control">
             </div>
           </div>
         </div>
         <center><button class="btn btn-primary" type="button" onclick="
if (document.getElementById('new').value == document.getElementById('new1').value  && document.getElementById('old').value =='<?php echo $c3  ?>'  ) {
 
var data='type=updpassword&password='+document.getElementById('new').value;

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
      console.log(xhr.responsetext);
               iziToast.success({
    title: 'Password Updated!',
    message: 'Great Job',
    position: 'topRight'
  });
     }
  xhr.send(data);

}
else{
            iziToast.error({
    title: 'Please Check entries and try again!',
    message: 'Oops',
    position: 'topRight'
  });
}


         "> Update Password</button></center>
       </form>
     </div>
      <div class="col-sm-2"></div>
  </div>
</div>
  <?php
 }
 if ($type=='updpassword') {
   $pass=$_POST['password'];
   mysqli_query($link,"UPDATE login set password='$pass' ");
   echo "string";
 }
 if ($type=='f') {
   
   $query30=mysqli_query($link,"SELECT * FROM products  order by id limit 12");

     
      while ($fr=mysqli_fetch_array($query30)) {
        

        ?>

        

 <li class="splide__slide"> 
                                   <div class="products p-2"  onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  ">
             <center>
              <div class="pimg mb-2"><img src="images/<?php echo $fr['image1'];  ?>" height="200px;"></div>
               
               <p style="margin: 0" > <b><?php echo $fr['name'];  ?></b></p>
               <p class="mb-3" style="font-family: metropoliss">₦ <?php echo number_format($fr['price'],0);  ?></p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;" onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  ">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>

                                   
                                   
                                                                      

                                  </li>


        <?php
      }
 }


 if ($type=='l') {
   $room=$_POST['room'];
   $query30=mysqli_query($link,"SELECT * FROM products  where room ='$room' order by id desc limit 12");

        ?>
  <div class="col-sm-12 mb-5"><h4 style="line-height: 60px;font-weight: bolder; text-align: center;">OUR BEST SELLERS- THE ONES YOU CAN’T RESIST </h4> </div> 

        <?php
      while ($fr=mysqli_fetch_array($query30)) {
        

        ?>

         <div class="col-sm-3  mb-5" onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  ">
           <div class="products p-2">
             <center>
              <div class="pimg mb-2"><img src="images/<?php echo $fr['image1'];  ?>" height="200px;"></div>
               
               <p style="margin: 0" > <b><?php echo $fr['name'];  ?></b></p>
               <p class="mb-3" style="font-family: metropoliss"> <?php if ($fr['color2'] !=='') {
               ?>
 <span style="font-size: .8em; color: grey; margin-right: 10px">From: </span>  
               <?php
               }  ?> ₦ <?php echo number_format($fr['price'],0) ;  ?></p>
               <button  class="btn" style="background: #bc9364; color: white; width: 70%; height: 50px;"   onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  ">View Details</button>
                <button style="width: 25%; background: #bc9364" class="btn"  onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  "><span class="iconify" data-icon="uil:shopping-cart-alt" data-inline="false" data-width="36" style="color: #f4ede3"></span></button>

             </center>
           </div>
         </div>



        <?php
      }
 }
 if ($type=='addtocart') {
$quantity=$_POST['quantity'];
$id=$_POST['id'];
$color=$_POST['color'];


$query30=mysqli_query($link,"SELECT * FROM products where id='$id' ");
      while ($fr=mysqli_fetch_array($query30)) {
     
      echo $fr['color2'];
       $image1=$fr['image1'];
       if ($color !=="") {
          if( $color == $fr['color2']){
$price=$fr['price2'];
  $name=$fr['name'].' | '.$fr['color2'];
       }

if($color == $fr['color3']){
$price=$fr['price3'];
  $name=$fr['name'].' | '.$fr['color3'];
       }
       }
       else{
        $price=$fr['price'];

           $name=$fr['name'];
       }
      

             }

     echo $price; 
if (isset($_COOKIE['cart'.$id])) {

$data=explode("__",$_COOKIE['cart'.$id]);

$p=$data[3];
$v=$data[4];
$new= $p + $quantity;
setcookie("cart".$id, $name."__".$price."__".$image1."__".$new."__".$color, time() + (86400 * 30), '/');
}
else{
  setcookie("cart".$id, $name."__".$price."__".$image1."__".$quantity."__".$color, time() + (86400 * 30), '/');
}








 }
 if ($type=='cartdom') {
   

$total=0;
$count=0;
 ?>
<a href="#" class="close-button" id="control"><span class="close-icon" style="color: black !important"><span class="iconify" data-icon="bi:x-octagon-fill" data-inline="false" data-width="20"></span></span></a>
    <h2>Shopping Bag <span class="count" id="ctop">2</span></h2>
    <ul class="products">

      <?php
foreach ($_COOKIE as $key=>$val)
  {

    if ($key[0].$key[1].$key[2].$key[3]=='cart') {
      
    
$omo=explode("__", $_COOKIE[$key]);

$total= $total + $omo[3] * $omo[1];
$count=$count + 1;
    ?>
   <li class="productl">
        <a href="#" class="product-link">
          <span class="product-image">
            <img src="images/<?php echo $omo[2]  ?>" alt="Product Photo">
          </span>
          <span class="product-details">
            <h3><?php echo $omo[0]  ?></h3>
            <span class="qty-price">
              <span class="qty">
                <button class="minus-button" id="minus-button-1" onclick="carta('minus','<?php echo $key ?>','')">-</button>
                <input type="number" id="qty-input-1" class="qty-input" step="1" min="1" max="1000" name="qty-input" value="<?php echo $omo[3]  ?>" pattern="[0-9]*" title="Quantity" inputmode="numeric" oninput=" if (this.value==0) {
                  this.value=1;
                }
                carta('q','<?php echo $key ?>',this.value); ">
                <button class="plus-button" id="plus-button-1" onclick="carta('plus','<?php echo $key ?>','')">+</button>
                <input type="hidden" name="item-price" id="item-price-1" value="12.00">
              </span>
              <span class="price">₦ <?php echo  number_format($omo[1],0)   ?></span>
            </span>
          </span>
        </a>
        <a href="#remove" class="remove-button" onclick="carta('delete','<?php echo $key ?>','')"><span class="remove-icon">X</span></a>
      </li>

    <?php
  







}

  }
      ?>
   
    
    </ul>
    <span id="cc" style="display: none;"><?php  echo $count; ?></span>
    <div class="totals">
      <div class="subtotal">
        <span class="label">Subtotal:</span> <span class="amount"> ₦ <?php echo number_format($total,0) ;  ?></span>
      </div>
      <!-- <div class="shipping">
        <span class="label">Shipping:</span> <span class="amount">$7.95</span>
      </div>
      <div class="tax">
        <span class="label">Tax:</span> <span class="amount">$71.95</span>
      </div> -->
    </div>
    <div class="action-buttons">
      <a class="view-cart-button" href="#">Cart</a><a class="checkout-button" href="checkout.html">Checkout</a>
    </div>

   <?php



 }
 if ($type=='carta') {
   $act=$_POST['act'];
   $id=$_POST['id'];
   $val=$_POST['val'];
   echo $act;
   if ($act=='plus') {
     if (isset($_COOKIE[$id])) {
   
$first=explode("__", $_COOKIE[$id]);

$name=$first[0];
$color=$first[4];

$image1=$first[2];
$price=$first[1];
$quantity=$first[3];
$new=$quantity + 1;
setcookie($id, $name."__".$price."__".$image1."__".$new."__".$color, time() + (86400 * 30), '/');

     }

   }

if ($act=='minus') {
     
 if (isset($_COOKIE[$id])) {
     
$first=explode("__", $_COOKIE[$id]);
$color=$first[4];
$name=$first[0];
$image1=$first[2];
$price=$first[1];
$quantity=$first[3];
$new=$quantity - 1;
setcookie($id, $name."__".$price."__".$image1."__".$new."__".$color, time() + (86400 * 30), '/');

     }
   }

if ($act=='delete') {
     
if (isset($_COOKIE[$id])) {
     
$first=explode("__", $_COOKIE[$id]);

$name=$first[0];
$image1=$first[2];
$price=$first[1];
$quantity=$first[3];
$new=$quantity - 1;
setcookie($id, "", time() - (86400 * 30), '/');

     }
   }

if ($act=='q') {
     if (isset($_COOKIE[$id])) {
     
$first=explode("__", $_COOKIE[$id]);

$name=$first[0];
$color=$first[4];
$image1=$first[2];
$price=$first[1];
$quantity=$first[3];

setcookie($id, $name."__".$price."__".$image1."__".$val."__".$color, time() + (86400 * 30), '/');

     }

   }



 }
 if ($type=='find') {
  if (isset($_POST['room'])) {
    $room=$_POST['room'];
      $query30=mysqli_query($link,"SELECT * FROM products  where room ='$room' order by id desc limit 30 ");
  }
else{
    $query30=mysqli_query($link,"SELECT * FROM products order by id desc limit 30 ");
}
 
    $query301=mysqli_query($link,"SELECT * FROM products where room ='Living Room' order by id desc ");
       $query302=mysqli_query($link,"SELECT * FROM products where room ='Bedroom' order by id desc ");
          $query303=mysqli_query($link,"SELECT * FROM products where room ='Workspace' order by id desc ");
             $query304=mysqli_query($link,"SELECT * FROM products where room ='Accessories' order by id desc ");
             $r1=mysqli_num_rows($query301);
              $r2=mysqli_num_rows($query302);
               $r3=mysqli_num_rows($query303);
                $r4=mysqli_num_rows($query304);
     
   ?>



<div class="row">
  <div class="col-sm-3 mb-5">
    
    <div class="vab">
      <div class="vabb mb-3" onclick="window.location='search.php?room=Living Room'">
        Living Room  - <span style="margin-left: 50px; color: orange"> <?php echo $r1;  ?></span>
      </div>
      <div class="vabb mb-3" onclick="window.location='search.php?room=Bedroom'">
        Bedroom - <span style="margin-left: 50px; color: orange"> <?php echo $r2;  ?> </span>
      </div>
      <div class="vabb mb-3" onclick="window.location='search.php?room=Workspace'">
        Workspace - <span style="margin-left: 50px; color: orange"> <?php echo $r3;  ?> </span>
      </div>
      <div class="vabb mb-3" onclick="window.location='search.php?room=Accessories'">
       Accessories  - <span style="margin-left: 50px; color: orange"> <?php echo $r4;  ?> </span>
      </div>
    </div>
  </div>
    <div class="col-sm-1"></div>
      <div class="col-sm-8">
       <div class="row">
        <?php 

     while ($fr=mysqli_fetch_array($query30)) {
        

        ?>
 <div class="col-sm-4 mb-4">
              <div class="product1 " onclick="
window.location='details.php?id=<?php echo $fr['id'];  ?>';

                  ">
              <div class="pimg">
                
                <center style="vertical-align: middle;">
                  <img src="images/<?php echo $fr['image1'];  ?>" class="img-fluid" style="vertical-align: middle;" >
                 
                </center>
              </div>
              <div class="row">
                <div class="col-sm-6">
                     <p class="mb-2" style="text-decoration: underline;"><b><?php echo $fr['name'];  ?></b></p>
                 
                </div>
                <div class="col-sm-6">
                   <p class="mb-2">₦
 <?php echo $fr['price'];  ?></p>
                </div>
              </div>
            </div>
        </div>

        <?php
      }
         ?>

               </div>
      </div>
</div>
   <?php
 }
 if ($type=="processs") {
  ?>



  <?php
   
$p=$_POST['date'];

if ($p=='cart') {
  ?>
 <center><h5>Cart Summary</h5></center>

  <?php
     $total= 0;
$count=0;
foreach ($_COOKIE as $key=>$val)
  {

    if ($key[0].$key[1].$key[2].$key[3]=='cart') {
      
    
$omo=explode("__", $_COOKIE[$key]);

$total= $total + $omo[3] * $omo[1];
$count=$count + 1;
    ?>
   
   <li class="productl mb-4 ">
        

          <div class="row">
            <div class="col-4 "><span class="product-image">
            <img src="images/<?php echo $omo[2]  ?>" alt="Product Photo" style="height: 100px">
            <p><?php echo $omo[0]  ?></p>
          </span></div>
             <div class="col-4 mt-5"><span class="qty">
               Qty : <?php echo $omo[3]  ?>
                
               
                <input type="hidden" name="item-price" id="item-price-1" value="12.00">
              </span></div>
              <div class="col-4 mt-5"><span class="price"> ₦ <?php echo  number_format($omo[1],0)   ?></span></div>
          </div>
          
          
        
       
      </li>

    <?php
  







}

  }

  ?>
<span id="speal" style="display: none;"> <?php echo $total ;  ?></span>
   <button class="btn btn-secondary" style="float: right; margin-left: 10px; ">Total : ₦ <?php echo number_format($total,0) ;  ?></button><button class="btn btn-success" style="float: right; background: #eb7a45" onclick="document.getElementById('step-2').click()">Next</button>


  <?php
    
}
if ($p=='address') {
  ?>


  <?php

}
if ($p=='shipping') {
  

}




 }
 if ($type=='pp') {
  $amt=$_POST['amt'];
    $email=$_POST['email'];

  ?>

<form id="lkkk">
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <button type="button" type="submit"  class="btn btn-primary" style="background: orange" id="kj">Pay Now With Flutterwave</button>
</form>


  <?php

}
 if ($type=='insertor') {
 $name=$_POST['name'];
 $phone=$_POST['phone'];
  $email=$_POST['email'];
 $country=$_POST['country'];
  
 $countrystate=$_POST['country-state'].$_POST['state'];
 $address="Country: ".$country." | State: ".$countrystate." | Address : ".$_POST['address'];

$ref=rand(34235,8725278);

 mysqli_query($link,"INSERT INTO saddress values('','$ref','$name','$email','$phone','$address')");
$query1=mysqli_query($link,"SELECT * from saddress order by id desc limit 1");
while ($res1=mysqli_fetch_array($query1)) {
  $id1=$res1['id'];
}

     $total= 0;
$count=0;
foreach ($_COOKIE as $key=>$val)
  {

    if ($key[0].$key[1].$key[2].$key[3]=='cart') {
      
    
$omo=explode("__", $_COOKIE[$key]);

$total= $total + $omo[3] * $omo[1];
$count=$count + 1;
$name=$omo[0];
$pic=$omo[2];
$price=$omo[1];
$qty=$omo[3];
$qtyy=$omo[4];
$t=$price * $qty;
$ll=strlen($key);
$llk= 4 - $ll ;
$string = substr($key, $llk);

$date=date("Y/m/d h:i:s");


  mysqli_query($link,"INSERT INTO orders values('','pending','$date','$id1','$ref','$string','$price','$qty','$t','$qtyy')");

  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=Vd4FpMaa3owrF4SpJj9M5inylokapsKqVJhg2nwG8S6Wiu6Iy2lBSGvm7XEF&from=RockasEmp&to=08116331975&body=RockasEmpire%0D%0ANew-Order:".$ref."%0D%0Arockasempire.com/dashboard&dnd=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",

 
    
   
));

$response = curl_exec($curl);

curl_close($curl);



 $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=Vd4FpMaa3owrF4SpJj9M5inylokapsKqVJhg2nwG8S6Wiu6Iy2lBSGvm7XEF&from=RockasEmp&to=".$phone."&body=RockasEmpire%0D%0AYour Order:".$ref." has been received%0D%0Arockasempire.com/dashboard&dnd=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",

 
    
   
));

$response = curl_exec($curl);

curl_close($curl);

  
       $mail = new PHPMailer();    
    $mail->IsSMTP(); 

    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "buskifortress.com";


    $mail->IsHTML(true);
    //Username to use for SMTP authentication
  $mail->Username = 'support@buskifortress.com';                 // SMTP username
$mail->Password = 'buskif01';                           // SMTP password
$mail->Port = 465;  
    //Set who the message is to be sent from
    $mail->setFrom('support@buskifortress.com','Buski Fortress');
    //Set an alternative reply-to address
    $mail->addReplyTo('support@buskifortress.com', 'Buski Fortress Support');
    //Set who the message is to be sent to
    $mail->addAddress('jerryadenij@gmail.com');
    //Set the subject line
    $mail->Subject = 'BuskiFortress New Order';
  $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
    //Read an HTML message body from an external file, convert referenced images to embedded,
     //Read an HTML message body from an external file, convert referenced images to embedded,
   
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML(' New Order On buskifortress.com');
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //send the message, check for errors
   $mail->Send();



}

  }

?>


<center>
  <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
  <p class="mt-5"> <b> PAYMENT SUCCESSFUL</b></p>
</center>

<button style="float: right;" class="btn btn-success" onclick="document.getElementById('step-5').click()">Finish</button>

<span id="fake" style="display: none;"><?php echo $ref  ?></span>

<?php



 }
 if ($type=='final') {
  $ref=$_POST['ref'];



   ?>

<center>
  
  <p>Your order with order no <span style="font-weight: bolder;"><?php echo $ref;  ?></span> has been placed successfuly</p>
</center>
   <?php
 }
  }

?>