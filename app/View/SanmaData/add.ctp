<h1>Add Datas</h1>
<p>Sanma!</p>
<?php
  echo $this->BootstrapForm->create('SanmaData');  
  echo $this->BootstrapForm->input('id');
  echo $this->BootstrapForm->input('date');  
  echo $this->BootstrapForm->input('company');
  echo $this->BootstrapForm->error('company');
  echo $this->BootstrapForm->input('person_c');
  echo $this->BootstrapForm->error('person_c');
  echo $this->BootstrapForm->label('Contact');
  echo $this->BootstrapForm->select('contact', array('e-mail'=>'E-Mail', 'phone'=>'Phone'));
  echo $this->BootstrapForm->input('person_m');
  echo $this->BootstrapForm->error('person_m');
  echo $this->BootstrapForm->input('memo');
  echo $this->BootstrapForm->error('memo');
  echo $this->BootstrapForm->end('Submit');
?>
<input type="button" onclick="location.href='index'" value="戻る" />
