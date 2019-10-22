<?php $no = 1; foreach($indihome_music as $ihs){ 
  $array[]=array(
    'TOTAL_INDIHOME_MUSIC' => $ihs->jtb
  );
  $sum_indihome_music = array_sum(array_column($array, 'TOTAL_INDIHOME_MUSIC'))
  ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                 <tr>
                  <td><b>TOTAL</b></td>
                  <td colspan="2" style="text-align: center"><b><?php if ($indihome_music != NULL) {
                    echo $sum_indihome_music;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr>



