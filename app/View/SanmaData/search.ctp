<h1>Add Datas</h1>
<p>Sanma!</p>
<?php
  echo $this->Form->create('SanmaData', array('type'=>'post','action'=>'table'));
  echo $this->Form->input('ymd',array(
  'type'=>'date',
  'label'=>'生年月日',
  'dateFormat'=>'YMD',
  'monthNames'=>false,
  'empty'=>array(0=>'-'),
  'selected'=>array('year'=>0, 'month'=>0, 'day'=>0)));
  echo $this->Form->input('date');  
  echo $this->Form->input('company');
  echo $this->Form->text('person_c');
  echo $this->Form->input('contact');
  echo $this->Form->input('person_m');
  echo $this->Form->input('memo');
  echo $this->Form->end('Submit');
?>
