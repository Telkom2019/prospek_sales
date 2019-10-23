<?php $no = 1; foreach($wifi_extender as $ihs){ 
	$array[]=array(
		'TOTAL_WIFI_EXTENDER' => $ihs->jtb
	);
	$sum_wifi_extender = array_sum(array_column($array, 'TOTAL_WIFI_EXTENDER'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($wifi_extender != NULL) {
                    echo $sum_wifi_extender;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr> 


