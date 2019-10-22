<?php $no = 1; foreach($movin as $ihs){ 
	$array[]=array(
		'TOTAL_MOVIN' => $ihs->jtb
	);
	$sum_movin = array_sum(array_column($array, 'TOTAL_MOVIN'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($movin != NULL) {
                    echo $sum_movin;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr> 


