<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<?php
  include "connect.php";
  $sql = "SELECT * FROM smartfarm WHERE id=$_GET[id]";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>
    <div class="container">
        <div class="col-8">
            <h1 class="text-center"> แก้ไขข้อมูลสมาร์ทฟาร์ม </h1>
            <form action="update_smartfarm.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row[id]; ?>" /> 
                Zone : <input type="text" name="zone" class="form-control" value="<?php echo $row[zone]; ?>" /> 
                Board: <input type="text" name="board" class="form-control" value="<?php echo $row[board]; ?>" /> 
                อุณหภูมิ: <input type="text" name="temp" class="form-control" value="<?php echo $row[temp]; ?>" />  
                ความชื้น: <input type="text" name="humi" class="form-control" value="<?php echo $row[humi]; ?>" /> 
                <input type="submit" value="แก้ไข" class="btn btn-primary" />
            </form>
        </div>
   </div>
    
</body>
</html>