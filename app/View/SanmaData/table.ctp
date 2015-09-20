<h1>Add Datas</h1>
<p>Sanma!</p>
<p>company: <?php echo $company; ?></p>
<p>memo: <?php print_r($memo); ?></p>
<p>contact: <?php print_r($contact); ?></p>
<p>date0: <?php print_r($date0); ?></p>
<p>date1: <?php print_r($date1); ?></p>
<p></p>

<table>
<?php if (isset($datas)): ?>
<?php foreach ($datas as $data): ?>
<tr>
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
<input type="button" onclick="location.href='search'" value="検索に戻る" />
<input type="button" onclick="location.href='index'" value="最初に戻る" />

