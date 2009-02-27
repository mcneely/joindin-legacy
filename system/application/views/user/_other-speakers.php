<?php
//print_r($udata);
$ct		= 0;
$limit	= 10;
$name=(!empty($udata[0]->full_name)) ? $udata[0]->full_name : $udata[0]->username;
?>
<div class="box">
	<h4><?php echo $title; ?></h4>
	<div class="ctn">
		<p>
		Here's just a few of the other great presenters that spoke alongside <b><?php echo $name; ?></b>
		at other conferences.
		</p>
		<ul>
    	<?php 
			//print_r($content); 
			foreach($content as $k=>$v){
				if($ct>$limit){ break; }
				$name=(!empty($v->full_name)) ? $v->full_name : $v->username;
				echo '<li><a href="/user/view/'.$v->user_id.'">'.$name.'</a>';
				$ct++;
			}
		?>
		</ul>
	</div>
</div>