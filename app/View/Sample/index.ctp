<h1>Index Page</h1>
<p>this is test View.</p>
<p>　</p>
<p>
  <?php
     echo $this->Form->create(false, array('type'=>'post','action'=>'.'));
     echo $this->Form->text('text1');
     echo $this->Form->end("submit")
  ?>
  <p>
    <?php echo $result ?>
  </p>
</p>
</div>
  
