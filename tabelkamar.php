 <?php
 require_once('conf/conf.php');
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
 header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); 
 header("Cache-Control: no-store, no-cache, must-revalidate"); 
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache"); // HTTP/1.0
 date_default_timezone_set("Asia/Bangkok");
 $tanggal= mktime(date("m"),date("d"),date("Y"));
 $jam=date("H:i");
?>
                <table class="tabelnew" style="font-size: 1.2rem;">
                    <thead>
                      <tr style="background: #35A9DB;color: #fff;">
                        <td><b>Kelas Kamar</b></td>
                        <td><b>Jumlah Bed</b></td>
                        <td><b>Bed Terisi</b></td>
                        <td><b>Bed Kosong</b></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  
                          $_sql="Select kelas from kamar where statusdata='1' group by kelas" ;  
                          $hasil=bukaquery($_sql);

                          while ($data = mysqli_fetch_array ($hasil)){
                            echo "<tr>
                                <td><b>".$data['kelas']."</b></td>
                                <td><b>
                                     ";
                                       $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."'"));
                                       echo $data2[0];
                                echo "
                                </b></td>
                                <td><b>
                                     ";
                                     $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."' and status='ISI'"));
                                     echo $data2[0];
                                echo "
                                </b></td>
                                <td><b>
                                      ";
                                     $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."' and status='KOSONG'"));
                                     echo $data2[0];
                                echo "
                                </b></td>
                              </tr> ";
                          }
                        ?>
                    </tbody>
                </table>
