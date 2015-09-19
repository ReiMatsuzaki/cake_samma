<h1>入力</h1>
<p>情報の入力</p>
<p>　</p>
<p>
  <?php
     echo $this->Form->create(false, array('type'=>'post','action'=>'./input'));
     echo $this->Form->text('text1');
     echo $this->Form->text('text2');
     echo $this->Form->text('text3');
     echo $this->Form->text('text4');
     echo $this->Form->text('text5');
     echo $this->Form->end("submit")     
  ?>
  <?php
     echo $this->Form->create(false, array('type'=>'post','action'=>'./tmp1'));
     echo $this->Form->text('text1');
     echo $this->Form->end("submit")
  ?>  
  <p>
    <?php 
      echo $result1;
      echo $result2;
      echo $result3;      
     ?>
  </p>
</p>
</div>
  