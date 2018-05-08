<html>
<body>

  <script src="js/sweetalert2.all.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
  <script>swal({
  position: 'center',
  type: 'success',
  allowOutsideClick: false,
  allowEscapeKey: false,
  title: 'Congratulations',
  text:'Your booking was successfully placed',
  showConfirmButton: false,
  timer: 3800
})</script>





  <?php

  header( "refresh:3.8;url=home.php" );
  ?>



</body>
</html>
