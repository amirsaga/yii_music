<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Shop <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div id="gmenu">
<?php foreach ($Genres as $Genre) : ?>
	<h6><?php echo CHtml::link($Genre->Name, array('store/browse/','gid'=>$Genre->GenreId)) ;?></h6>
<?php endforeach; ?>
</div>
<center><img style="width:70%; height:50%"src="<?php echo Yii::app()->request->baseUrl; ?>/images/grunge-music-poster.jpg" alt=""></center>
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
