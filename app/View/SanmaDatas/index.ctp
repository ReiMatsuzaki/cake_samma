<h1>Index Page</h1>
<p>My Sanma Datas View. </p>
<table>
<?php foreach ($datas as $data) : ?>
  <tr>
    <td><?php echo $data['SanmaData']['id']; ?></td>
    <td><?php echo $data['SanmaData']['person_c']; ?></td>
  </tr>
<?php endforeach; ?>	
</table>