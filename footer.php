
<footer class="main-footer">
    <strong>Copyright &copy; 2017.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  	<script src="../js/tinymce/tinymce.min.js"></script>
			<script>

				tinyMCE.init({mode:"exact",elements:"tst_content",
					plugins: [
						"advlist autolink lists link image charmap print preview anchor",
						"searchreplace visualblocks code fullscreen",
						"insertdatetime media table contextmenu paste jbimages"
					],
					toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
					relative_urls: false,
					 

				height: "500",
				width:900
				});
			</script>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!--<script type = "text/javascript" language = "javascript">
			$(document).ready(function() {
					$('#submit1').click(function(){
					var slider_name = $('#slider_name').val();
					var status = $('#status').val();
					if(slider_name == "") {
					$('#slider_name').css({'border':'1px solid #f84f4f','background-image':'url(dist/img/red-close.png)','background-position':'right center','background-repeat':'no-repeat'});
					return false;
					} else{
						$('#slider_name').css({'border':'1px solid #419841','background-image':'url(dist/img/green-right.png)','background-position':'right center','background-repeat':'no-repeat'});
					}
					if(status == "") {
					$('#status').css({'border':'1px solid #f84f4f','background-image':'url(dist/img/red-close.png)','background-position':'right center','background-repeat':'no-repeat'});
					return false;
					} else{
						$('#status').css({'border':'1px solid #419841','background-image':'url(dist/img/green-right.png)','background-position':'right center','background-repeat':'no-repeat'});
					}
				});
					
			});
    </script> -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="bootstrap/js/bootstrap-datetimepicker.js"></script>

<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
			$("#pick_date").datepicker({
                format: "dd-M-yyyy"
            });

</script>
		<script>
			function readURL(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview1').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img1").change(function(){
				readURL(this);
			});
			
			$(document).ready(function(){
					$(".delete_img1").on("click",function(){
						var data_id	= $(".delete_img1").attr("id");
						var img	= $(".delete_img1").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/sliderremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview1").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			function delete_gallery(id,pojectid,projectimg) {

				var gal_id	= id;
				var pojectid = pojectid;
				
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/galremove.php",
							data: {gal_id:gal_id,pojectid:pojectid},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}
			
			function readURL4(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview4').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img4").change(function(){
				readURL4(this);
			});
			
			$(document).ready(function(){
					$(".delete_img4").on("click",function(){
						var data_id	= $(".delete_img4").attr("id");
						var img	= $(".delete_img4").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/philosremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview4").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
	
	   function readURL5(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview5').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img5").change(function(){
				readURL5(this);
			});
			
			$(document).ready(function(){
					$(".delete_img5").on("click",function(){
						var data_id	= $(".delete_img5").attr("id");
						var img	= $(".delete_img5").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/studioremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview5").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			
		 function readURL6(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview6').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img6").change(function(){
				readURL6(this);
			});
			
			$(document).ready(function(){
					$(".delete_img6").on("click",function(){
						var data_id	= $(".delete_img6").attr("id");
						var img	= $(".delete_img6").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/talksremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview6").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});	
			
		function readURL7(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview7').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img7").change(function(){
				readURL7(this);
			});
			
			$(document).ready(function(){
					$(".delete_img7").on("click",function(){
						var data_id	= $(".delete_img7").attr("id");
						var img	= $(".delete_img7").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/talksgalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview7").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			
		function readURL8(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview8').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img8").change(function(){
				readURL8(this);
			});
			
			$(document).ready(function(){
					$(".delete_img8").on("click",function(){
						var data_id	= $(".delete_img8").attr("id");
						var img	= $(".delete_img8").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/publiremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview8").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			
			function readURL9(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview9').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img9").change(function(){
				readURL9(this);
			});
			
			$(document).ready(function(){
					$(".delete_img9").on("click",function(){
						var data_id	= $(".delete_img9").attr("id");
						var img	= $(".delete_img9").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/workshopremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview9").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			
			function readURL11(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview11').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img11").change(function(){
				readURL11(this);
			});
			
			$(document).ready(function(){
					$(".delete_img11").on("click",function(){
						var data_id	= $(".delete_img11").attr("id");
						var img	= $(".delete_img11").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/conferenceremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview11").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
			
			function readURL12(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview12').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img12").change(function(){
				readURL12(this);
			});
			
			$(document).ready(function(){
					$(".delete_img12").on("click",function(){
						var data_id	= $(".delete_img12").attr("id");
						var img	= $(".delete_img12").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/conferencegalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview12").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 
			
		function readURL13(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview13').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img13").change(function(){
				readURL13(this);
			});
			
			$(document).ready(function(){
					$(".delete_img13").on("click",function(){
						var data_id	= $(".delete_img13").attr("id");
						var img	= $(".delete_img13").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/academicremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview13").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 
			
		function readURL14(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview14').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img14").change(function(){
				readURL14(this);
			});
			
			$(document).ready(function(){
					$(".delete_img14").on("click",function(){
						var data_id	= $(".delete_img14").attr("id");
						var img	= $(".delete_img14").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/academicgalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview14").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 

         function readURL15(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview15').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img15").change(function(){
				readURL15(this);
			});
			
			$(document).ready(function(){
					$(".delete_img15").on("click",function(){
						var data_id	= $(".delete_img15").attr("id");
						var img	= $(".delete_img15").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/expositionremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview15").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 
			
		function readURL16(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview16').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img16").change(function(){
				readURL16(this);
			});
			
			$(document).ready(function(){
					$(".delete_img16").on("click",function(){
						var data_id	= $(".delete_img16").attr("id");
						var img	= $(".delete_img16").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/expositiongalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview16").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 

 function readURL17(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview17').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img17").change(function(){
				readURL17(this);
			});
			
			$(document).ready(function(){
					$(".delete_img17").on("click",function(){
						var data_id	= $(".delete_img17").attr("id");
						var img	= $(".delete_img17").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/profileremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview17").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 
			
		function readURL18(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview18').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img18").change(function(){
				readURL18(this);
			});
			
			$(document).ready(function(){
					$(".delete_img18").on("click",function(){
						var data_id	= $(".delete_img18").attr("id");
						var img	= $(".delete_img18").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/profilegalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview18").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 	

function readURL19(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview19').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img19").change(function(){
				readURL19(this);
			});
			
			$(document).ready(function(){
					$(".delete_img19").on("click",function(){
						var data_id	= $(".delete_img19").attr("id");
						var img	= $(".delete_img19").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/profresearchremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview19").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 
			
		function readURL20(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview20').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img20").change(function(){
				readURL20(this);
			});
			
			$(document).ready(function(){
					$(".delete_img20").on("click",function(){
						var data_id	= $(".delete_img20").attr("id");
						var img	= $(".delete_img20").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/profresearchgalremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview20").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});
function readURL21(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview21').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img21").change(function(){
				readURL21(this);
			});
			
			$(document).ready(function(){
					$(".delete_img21").on("click",function(){
						var data_id	= $(".delete_img21").attr("id");
						var img	= $(".delete_img21").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/awardremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview21").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			}); 

			function readURL81(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#imgpreview81').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#original_img81").change(function(){
				readURL81(this);
			});
			
			$(document).ready(function(){
					$(".delete_img81").on("click",function(){
						var data_id	= $(".delete_img81").attr("id");
						var img	= $(".delete_img81").attr("data-img");
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/publialbumremove.php",
							data: { banner_image : img,id:data_id},
							success:function(data)
							{
								if(data=="1")
								{
									$("#imgpreview81").attr('src', '<?php echo BASE_URL?>admin/dist/img/no-img.jpg');
								}
							}
						});
					});
			});		
			
			
           function orderchange(id,pojectid) {

				var gal_id	= id;
				var pojectid = pojectid;
				var orderid = $("#orderid"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order.php",
							data: {gal_id:gal_id,pojectid:pojectid,orderid:orderid},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}
			function expositionchange(id,album_id) {

				var gal_id1	= id;
				var album_id = album_id;
				var exposition_order = $("#exposition_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order1.php",
							data: {gal_id1:gal_id1,album_id:album_id,exposition_order:exposition_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}			
			
			function academicchange(id,album_id) {

				var gal_id2	= id;
				var album_id = album_id;
				var academic_order = $("#academic_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order2.php",
							data: {gal_id2:gal_id2,album_id:album_id,academic_order:academic_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}		
			
			function conferencechange(id,album_id) {

				var gal_id3	= id;
				var album_id = album_id;
				var conference_order = $("#conference_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order3.php",
							data: {gal_id3:gal_id3,album_id:album_id,conference_order:conference_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}		
			
			function talkschange(id,album_id) {

				var gal_id4	= id;
				var album_id = album_id;
				var talks_order = $("#talks_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order4.php",
							data: {gal_id4:gal_id4,album_id:album_id,talks_order:talks_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}	

         function profresearchchange(id,album_id) {

				var gal_id5	= id;
				var album_id = album_id;
				var profresearch_order = $("#profresearch_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order5.php",
							data: {gal_id5:gal_id5,album_id:album_id,profresearch_order:profresearch_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}	

          function workshopchange(id,album_id) {

				var gal_id6	= id;
				var album_id = album_id;
				var workshop_order = $("#workshop_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order6.php",
							data: {gal_id6:gal_id6,album_id:album_id,workshop_order:workshop_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}	

          function publicationchange(id,album_id) {

				var gal_id6	= id;
				var album_id = album_id;
				var publication_order = $("#publication_order"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/order7.php",
							data: {gal_id6:gal_id6,album_id:album_id,publication_order:publication_order},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}	
          function alttagchange(id,pojectid) {

				var gal_id	= id;
				var pojectid = pojectid;
				var alttag = $("#alttag"+id).val();
						$.ajax({
							type:"POST",
							url:"<?php echo BASE_URL;?>admin/ajax/alttag.php",
							data: {gal_id:gal_id,pojectid:pojectid,alttag:alttag},
							success:function(data)
							{
								if(data=="1")
								{
									//window.location.href= "<?php echo BASE_URL;?>admin/edit_project.php?id="+pojectid;
								}
							}
						});
			}			
</script>
<!--<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td width="50%"><input type="text" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>-->

</body>
</html>
