<?php $no = 1; foreach($plc as $ihs){ 
	$array[]=array(
		'TOTAL_PLC' => $ihs->jtb
	);
	$sum_plc = array_sum(array_column($array, 'TOTAL_PLC'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($plc != NULL) {
                    echo $sum_plc;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr> 


