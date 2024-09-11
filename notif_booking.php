<?php
require_once('conf/conf.php');
$sql_count = "select count(no_booking) as jumlah from booking_periksa where status = 'Belum Dibalas'";
$baca_sql = bukaquery($sql_count);
$ambil_count = mysqli_fetch_array($baca_sql);
?>
<div class="notification-box">
    <span class="notification-count" id="ambil_count"><?php echo $ambil_count['jumlah']; ?></span>
    <div class="notification-bell">
      <span class="bell-top"></span>
      <span class="bell-middle"></span>
      <span class="bell-bottom"></span>
      <span class="bell-rad"></span>
    </div>
  </div>