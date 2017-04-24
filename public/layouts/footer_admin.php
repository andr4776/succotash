<!-- Javascript -->
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.backstretch.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/wow.min.js"></script>
</div>
<div id="footer">Copyright <?php echo date("Y", time()); ?>, Andre Roman</div>
</body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
