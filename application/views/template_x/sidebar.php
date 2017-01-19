<?php
$uri1 = $this->uri->segment(1,'');
$uri2 = $this->uri->segment(2,'');
$uri3 = $this->uri->segment(3,'');
?>


<div class="list-group">
	<span class="list-group-item"><h4 class="list-group-item-heading">Penginapan</h4></span>
	<?=anchor('dashboard/akaun','<i class="glyphicon glyphicon-link"></i> &nbsp; Alamat Web',array("class"=>($uri2=='akaun')?"list-group-item active":"list-group-item"))?>
	<?=anchor('dashboard/mymaster','<i class="glyphicon glyphicon-home"></i> &nbsp; Urus Penginapan ',array("class"=>($uri2=='mymaster')?"list-group-item active":"list-group-item"))?>	
	<span class="list-group-item"><h4 class="list-group-item-heading">Tempahan</h4></span>
	<?=anchor('dashboard/mybilik/tempahan_baru','<i class="glyphicon glyphicon-check"></i> &nbsp; Tempahan Baru ('.$bil_tempahan.')',array("class"=>($uri2=='mybilik' && $uri3=='tempahan_baru')?"list-group-item active":"list-group-item"))?>
	<?=anchor('dashboard/mybilik/tempahan','<i class="glyphicon glyphicon-tasks"></i> &nbsp; Urus Tempahan ',array("class"=>($uri2=='mybilik' && $uri3=='tempahan')?"list-group-item active":"list-group-item"))?>
	<?=anchor('dashboard/kalendar','<i class="glyphicon glyphicon-calendar"></i> &nbsp; Kalendar',array("class"=>($uri2=='kalendar')?"list-group-item active":"list-group-item"))?>
	<?=anchor('dashboard/mybilik/sekat','<i class="glyphicon glyphicon-minus-sign"></i> &nbsp; Sekat Tarikh ',array("class"=>($uri2=='mybilik' && $uri3=='sekat')?"list-group-item active":"list-group-item"))?>
	
</div>  