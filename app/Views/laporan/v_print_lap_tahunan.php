<div class="col-12">
      <b>Tahun : </b> <?= $tahun ?>  
    <table class="table table-bordered table-striped">
    <tr class="text-center bg-info">
        <th>No.</th>
        <th>Bulan</th>
        <th>Total</th>
    </tr>
    <?php $no = 1;
    foreach($datatahunan as $key => $value){ 
    $grandtotal[] = $value['total_harga'];    
    ?>

    <tr>
        <td class="text-center"><?= $no++?></td>
        <td class="text-center"><?= $value['bulan']?></td>
        <td class="text-right">Rp. <?= number_format($value['total_harga'],)?></td>
    </tr>
    <?php } ?>
    <tr class="bg-info">
        <td class="text-center" colspan = "2">
            <h5>Grand Total</h5>
        </td>
        <td class="text-right">
           Rp. <?= $datatahunan == null ? '' : number_format(array_sum($grandtotal),0) ?>
        </td>
    </tr>
</table>
</div>