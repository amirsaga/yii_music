<?php
/* @var $this StoreController */

$this->breadcrumbs=array(
	'Store',
);
?>
<h1>Shop <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if($_GET['gid']){
	foreach ($Genres as $Genre) {
		echo '<h1>'.$Genre->Name .'</h1><br />';
		$desc = $Genre->Description;
	
} ?>

<div id="gmenu">
	<?php echo $desc; ?>
</div>

<table>
	<tr>
		<?php $cntRow = 0;
		foreach ($Albums as $Album) {
		 	$aid = $Album->ArtistId;
		 	$cntRow++;
		 	if($cntRow % 2 )echo "</tr><tr>";
		 	foreach ($Artists as $Artist) {
		 		if($Artist->ArtistId == $aid){
		 			$name = $Artist->Name . "<br />";
		 		}
		 	}
		 	echo "<td><center><strong>" .$name ."</strong>";
		 	echo CHtml::link('<img src="'. Yii::app()->request->baseUrl . $Album->AlbumArtUrl .'"/><br />', array('store/details/', 'album'=>$Album->AlbumId));
		 	echo $Album->Title ."<br />". $Album->Price ."</center></td>";
		 } 
		 ?>
	</tr>
</table>

<?php }
elseif($_GET['album']){
	foreach ($Albums as $Album) {
		echo '<img src="'.Yii::app()->request->baseUrl . $Album->AlbumArtUrl.'"/><br />"';
		echo $Album->Title . "<br />";
		echo $Album->Price. "<br />";
		echo CHtml::link('Add to Cart', array('store/cart/', 'album'=>$Album->AlbumId)) . "<br />"; 
	}
}
else{ ?>

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<h2><?php echo $content; ?></h2>

<?php } ?>