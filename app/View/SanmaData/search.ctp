<h1>Add Datas</h1>
<p>Sanma!</p>
<?php
  echo $this->Form->create(false, array('type'=>'post','action'=>'table'));
  echo $this->Form->input('date0',$ymd_opts+array('label'=>"Date0"));
  echo $this->Form->input('date1',$ymd_opts+array('label'=>"Date1"));
  echo $this->Form->input('company', array("size"=>10));
  echo $this->Form->input('person_c');
  echo $this->Form->label('Contact');
  echo $this->Form->select('contact', array('e-mail'=>'E-Mail', 'phone'=>'Phone'));
  echo $this->Form->input('person_m');
  echo $this->Form->input('memo');
  echo $this->Form->end('Submit');
?>
<input type="button" onclick="location.href='index'" value="戻る" />
