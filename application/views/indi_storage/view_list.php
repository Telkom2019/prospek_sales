<?php $no = 1; foreach($indi_storage as $ihs){ 
	$array[]=array(
		'TOTAL_INDI_STORAGE' => $ihs->jtb
	);
	$sum_indi_storage = array_sum(array_column($array, 'TOTAL_INDI_STORAGE'))
	?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->jtb?></td>
            
                </tr>

                <?php } ?>
                <tr>
                	<td><b>TOTAL</b></td>
                	<td colspan="2" style="text-align: center"><b><?php if ($indi_storage != NULL) {
                    echo $sum_indi_storage;}else{echo "DATA TIDAK TERSEDIA";}?></b></td>
                </tr>


