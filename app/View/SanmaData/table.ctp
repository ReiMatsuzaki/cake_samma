<h1>Add Datas</h1>
<p>Sanma!</p>
<p>complany: <?php echo $company; ?></p>
<p></p>
<?php if (isset($datas)): ?>
<?php foreach ($datas as $data): ?>
<?php echo $data['SanmaData']['company'] ?>
<?php endforeach; ?>
<?php endif; ?>
