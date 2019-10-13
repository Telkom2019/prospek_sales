<?php $no = 1; foreach($indihome as $ihs){ ?>
                <tr>
                  <td> <?php echo $no++ ?> </td>
                  <td><?php echo $ihs->KAWASAN?></td>
                  <td><?php echo $ihs->WITEL?></td>
                  <td><?php echo $ihs->DATEL?></td>
                  <td><?php echo $ihs->STO?></td>
                  <td><?php echo $ihs->NCLI?></td>
                  <td><?php echo $ihs->NDOS?></td>
                  <td><?php echo $ihs->NDEM?></td>
                  <td><?php echo $ihs->NO_INET?></td>
                  
                </tr>
                <?php } ?>