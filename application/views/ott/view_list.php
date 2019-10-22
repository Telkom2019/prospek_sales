<?php $no = 1; foreach($ott as $ihs){ 
	$array[]=array(
		'TOTAL_OTT' => $ihs->jtb
	);
	$sum_ott = array_sum(array_column($array, 'TOTAL_OTT'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($ott != NULL) { echo $sum_ott;}else{echo "DATA TIDAK TERSEDIA";} ?></b></td>
                </tr>


