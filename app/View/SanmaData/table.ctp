<h1>Add Datas</h1>
<p>Sanma!</p>
<p>company: <?php echo $company; ?></p>
<p>memo: <?php echo $memo; ?></p>
<p></p>

<table>
<?php if (isset($datas)): ?>
<?php foreach ($datas as $data): ?>
<tr>
<td><?php echo $data['SanmaData']['ymd'] ?></td>
<td><?php echo $data['SanmaData']['date'] ?></td>
<td><?php echo $data['SanmaData']['company'] ?></td>
<td><?php echo $data['SanmaData']['person_c'] ?></td>
<td><?php echo $data['SanmaData']['contact'] ?></td>
<td><?php echo $data['SanmaData']['person_m'] ?></td>
<td><?php echo $data['SanmaData']['memo'] ?></td>
</tr>
<?php endforeach; ?>
<?php endif; ?>
</table>

