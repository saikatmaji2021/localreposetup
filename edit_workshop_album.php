<?php include 'include/header.php'; ?>
<?php include 'include/leftpanel.php'; ?>
<?php 
	$sql = "SELECT * FROM workshop_album_list WHERE album_id=".$_GET['album_id'];
	$rs_result = mysql_query($sql);
	$sel_res = mysql_fetch_assoc($rs_result);
 ?>
<?php 
		if(isset($_POST['submit']))
		{
			$workshop_album_name = $_POST['workshop_album_name'];
			$studio_short = $_POST['studio_short'];
			$status = $_POST['status'];	
			$target_dir = "../uploads/";
			$original_img = basename( $_FILES["original_img"]["name"]);
			$original_img = mt_rand(5,5000).$original_img;
			$originaltarget_file = $target_dir.$original_img;
			$uploadOk = 1;
			$originalimageFileType = pathinfo($originaltarget_file,PATHINFO_EXTENSION);
			$imageoriginalFilesize = $_FILES["original_img"]["size"];
			if(!empty($sel_res['original_img']) && !empty($workshop_album_name) && !empty($status)){
				$sql = "UPDATE workshop_album_list SET workshop_album_name='".$workshop_album_name."',original_img='".$sel_res['original_img']."',studio_short='".$studio_short."',status='".$status."' WHERE album_id =".$_GET['album_id'];
				$ins = mysql_query($sql);
				echo '<script type="text/javascript">
							window.location = "'.BASE_URL.'admin/view_workshop_album.php?status=update"
					</script>';
			} else {
				if(!empty($workshop_album_name) && !empty($status)){
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["original_img"]["tmp_name"]);
						if($check !== false) {
							$msg = "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
						} else {
							$msg = "File is not an image.";
							$uploadOk = 0;
						}
					}
					if (file_exists($originaltarget_file)) {
						$msg = "Sorry, original image already exists.";
						$uploadOk = 0;
					} else {
						if ($imageoriginalFilesize > 5246668) {
								$msg = "Original Image Max Size 5MB";
								$uploadOk = 0;
						} else {
							
							if ($imageoriginalFilesize < 500) {
									$msg = "Original Image Max Size 900KB";
									$uploadOk = 0;
							} else {
	
							if($originalimageFileType != "jpg" && $originalimageFileType != "png" && $originalimageFileType != "jpeg") {
									$msg = "Sorry, only JPG, JPEG, PNG files are allowed.";
									$uploadOk = 0;
							} else {
	
								if ($uploadOk == 0) {
									$msg = "Sorry, your file was not uploaded.";
								}  else {
										if (move_uploaded_file($_FILES["original_img"]["tmp_name"], $originaltarget_file) ) {
										 $sql = "UPDATE workshop_album_list SET workshop_album_name='".$workshop_album_name."',original_img='".$original_img."',studio_short='".$studio_short."',status='".$status."' WHERE album_id =".$_GET['album_id'];
											$ins = mysql_query($sql);
												echo '<script type="text/javascript">
																	window.location = "'.BASE_URL.'admin/view_workshop_album.php?status=update"
													  </script>';
										} else {
										$msg = "Sorry, there was an error uploading your file.";
										}
								}
							}
							}
						}
					}
				} else {
					$msg = "All fields are required.";
				}	
			}	
		}
?>
  
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Workshop/Studio Album
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:void(0)">Album</a></li>
        <li class="active">Edit Album</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Album</h3>
            </div>
            <form role="form" method="post" action="" enctype="multipart/form-data" id="talk_album">
              <div class="box-body">
               <div class="form-group">
                  <label>Album Name</label>
                  <input type="text" class="form-control" name="workshop_album_name" id="workshop_album_name" placeholder="Enter Album Name..." value="<?php echo $sel_res['workshop_album_name'];?>">
                </div>
			   <div class="form-group">
                  <label for="exampleInputFile">Album Image</label>
                  <input type="file" name="original_img" id="original_img8">
				 <div class="imagebox">
				 <img id="imgpreview8" src="<?php if($sel_res['original_img'] != '') {?> ../uploads/<?php echo $sel_res['original_img']?> <?php } else { ?>dist/img/no-img.jpg<?php } ?>" alt=""/>
				 <span class="delete_img8 delete_img_icon" title="Delete" id="<?php echo $_GET['album_id']; ?>" data-img = "<?php echo $sel_res['original_img']; ?>">X</span>
				 </div>
               </div>
				<div class="form-group">
                  <label>Studio/Workshop Description</label>
                  <textarea class="form-control" rows="5" name="studio_short" id="studio_short" placeholder="Enter Description..."><?php echo $sel_res['studio_short'];?></textarea>
                </div>
				<div class="form-group">
                  <label>Status</label>
                  <select name="status" id="status" class="form-control m-b-10">
					 <option value=''>-- select status --</option>
                     <option <?php if($sel_res['status']==1) { ?>selected = 'selected'<?php } ?> value='1'>Active</option>
                     <option <?php if($sel_res['status']==2) { ?>selected = 'selected'<?php } ?> value='2'>Deactive</option>
				  </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit1" name='submit'>Submit</button>
              </div>
            </form>
          </div>
      </div>
    </section>
  </div>
  <?php include 'include/footer.php'; ?>