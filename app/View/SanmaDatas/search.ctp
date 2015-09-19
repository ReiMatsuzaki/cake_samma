<h1>Add Datas</h1>
<p>Sanma!</p>
<?php
//  echo $this->Form->create('SanmaData');
  echo $this->Form->create('SanmaData', array('type'=>'post','controller'=>'SanmaDatas','action'=>'table'));
  echo $this->Form->input('date');  
  echo $this->Form->input('company');
  echo $this->Form->text('person_c');
  echo $this->Form->input('contact');
  echo $this->Form->input('person_m');
  echo $this->Form->input('memo');
  echo $this->Form->end('Submit');
?>
<p><?php echo "===========" ?></p>
<p><?php echo $result ?></p>