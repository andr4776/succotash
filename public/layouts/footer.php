

<!-- Javascript -->
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.backstretch.min.js"></script>
<script src="public/assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../public/assets/js/scripts.js"></script>
<script src="javascripts/jscript.js"></script>

<div id="footer">Copyright <?php echo date("Y", time()); ?>, Andre Roman </div>
</body>

</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
