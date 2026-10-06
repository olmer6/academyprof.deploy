<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php if ($this->checkPosition('top')) : ?>
<div class="pos-top">
	<div class="box-1">
		<?php echo $this->renderPosition('top', array('style' => 'block')); ?>
	</div>
</div>
<?php endif; ?>



<div class="floatbox">
	<div class="row">
		<?php if ($this->checkPosition('title')) : ?>
		<h1 class="pos-title span9"><?php echo $this->renderPosition('title'); ?></h1>
		<?php endif; ?>
		
		<div class="pos-zapisatsya span3">
			<a href="index.php/zapisatstsya">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ <br />СО СКИДКОЙ 5%</a>
		</div>
	</div>
		<?php if ($this->checkPosition('description')) : ?>
		<div class="pos-description ">
<!--		<h2> Описание</h2>   -->
			<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>		

		<?php if ($this->checkPosition('programm')) : ?>
		<div class="pos-programm ">
		<h2> Список программ</h2>
			<?php echo $this->renderPosition('programm', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>
	
		<?php if ($this->checkPosition('bottom')) : ?>
		<div class="pos-bottom ">
			<?php echo $this->renderPosition('bottom', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>
		
		<?php if ($this->checkPosition('related')) : ?>
		<div class="pos-related span12">
			<?php echo $this->renderPosition('related', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>
		
</div>