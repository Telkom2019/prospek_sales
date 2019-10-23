<?php $no = 1; foreach($indihome_smart as $ihs){ 
	$array[]=array(
		'TOTAL_INDIHOME_SMART' => $ihs->jtb
	);
	$sum_indihome_smart = array_sum(array_column($array, 'TOTAL_INDIHOME_SMART'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($indihome_smart != NULL) {
                    echo $sum_indihome_smart;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr> 


