<!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © <?php echo date("Y"); ?> All rights reserved.</span>
        <span class="right"><a class="grey-text text-lighten-4" href="http://www.tec.ac.cr/" target="_blank">Tecnológico de Costa Rica</a></span>
        </div>
    </div>
  </footer>
<!-- END FOOTER -->

<!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
<!--    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>  
    
    
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.9/css/fileinput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.9/js/fileinput.js"></script>
    
    
    <script>
      
      $("#input-documento").fileinput({
			maxFileCount: 1,
			maxFileSize: "4000",
			
			uploadUrl: "uploadDocumento.php", // server upload action
			    autoReplace: true,

    		uploadAsync: false,
			
			//previewFileType: "image",
			
			///allowedFileExtensions: ["jpg", "png", "gif"],
			    
			browseClass: "btn waves-effect waves-light indigo ",
			dropZoneTitle: "Drag your document here",
			showUpload: false,
			showCaption: false,
			showRemove: false,
			layoutTemplates: {
       main1: '{preview}\n' +
            '<div class="kv-upload-progress hide"></div>\n' +
            '<div class="input-group {class}">\n' +
            '   {caption}\n' +
            '   <div class="input-group-btn">\n' +
            '       {remove}\n' +
            '       {cancel}\n' +
            '       {upload}\n' +
            '       {browse}\n' +
            '   </div>\n' +
            '</div>',
        main2: '{preview}\n<div class="kv-upload-progress hide"></div>\n{remove}\n{cancel}\n{browse}\n',
			}
		})
		// .on("filebatchselected", function(event, files) {
		// 	// trigger upload method immediately after files are selected
		// 	$(this).fileinput("upload");
		// 	console.dir(files);// debug
		
		// 	var nombreImagen = files[0]["name"];
		// 	var rutaImagenCargada = nombreImagen;
		// 	$("#documento").val(rutaImagenCargada);
		// })
      function send(){
        $("#input-documento").fileinput("upload");
      }
    </script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout01/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 03:38:20 GMT -->
</html>
