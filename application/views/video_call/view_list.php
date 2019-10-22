<?php $no = 1; foreach($video_call as $ihs){ 
  $array[]=array(
    'TOTAL_VIDEO_CALL' => $ihs->jtb
  );
  $sum_video_call = array_sum(array_column($array, 'TOTAL_VIDEO_CALL'))
  ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                  <td><b>TOTAL</b></td>
                  <td colspan="2" style="text-align: center"><b><?php if ($video_call != NULL) {
                    echo $sum_video_call;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr>



