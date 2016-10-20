<?php
use yii\helpers\Html;

?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th>ลำดับ</th>
            <th>ยี้ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
            <th>ประเภท cpu </th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $i => $item) {

            echo '<tr>';
            echo '<td>'.($i+1).'</td>';
            echo '<td>'.$item['com_type_id'].'</td>';
            echo '<td>'.$item['com_type_name'].'</td>';
            echo '<td>'.html::a('<i class="glyphicon glyphicon-heart"></i>',['/report_com_detail','id'=>$item['com_type_id']]).'</td>';
            echo '</tr>';
        }
        
        ?>

    </tbody>
</table>

<?php
//foreach ($com as $key => $value) {
//    echo ($key + 1) . ' : ' . $value->brand . ' / ' . $value->asset_code . ' / ' . $value->cpu_type . '<br>';
//}