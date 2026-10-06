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

<?php if ($this->checkPosition('media')) : ?> <!-- позиция "медиа" - неактивна -->
<div class="pos-media <?php echo 'media-'.$view->params->get('template.items_media_alignment'); ?>">
	<?php echo $this->renderPosition('media'); ?>
</div>
<?php endif; ?>

<?php if ($this->checkPosition('title')) : ?> <!-- Название пункта -->
<h2 class="pos-title">
	<?php echo $this->renderPosition('title'); ?>
</h2>
<?php endif; ?>

<?php if ($this->checkPosition('description')) : ?> <!-- позиция "описание" - неактивна -->
<div class="pos-description">
	<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
</div>
<?php endif; ?>
		
<div>
	
	<?php if ($this->checkPosition('prise')) : ?> <!-- цена -->
	<div class="pos-prise  <?php if ($this->checkPosition('prise_sale')) echo "span4 abolished_price" ?>">Стоимость:
		<?php echo $this->renderPosition('prise', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('prise_sale')) : ?> <!-- цена со скидкой -->
	<div class="pos-prise_sale span8"> Стоимость со скидкой:
		<?php echo $this->renderPosition('prise_sale', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($this->checkPosition('date2'))  : ?>
		<div class="pos-date"> Даты начала занятий:
			<?php echo $this->renderPosition('date2', array('style' => 'block')); ?>
		</div>
	<?php else: ?>
	
		<?php if (($this->checkPosition('date')) and  (!$this->checkPosition('date2'))) : ?>
			<div class="pos-date"> Дата начала занятий:
				<?php echo $this->renderPosition('date', array('style' => 'block')); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>	
	
	<?php if ($this->checkPosition('duration')) : ?> <!-- Продолжительность занятий -->
	<div class="pos-duration "> Продолжительность занятий:
		<?php echo $this->renderPosition('duration', array('style' => 'block')); ?>
	</div>
	<?php endif; ?>
	
</div>	
	
<?php if ($this->checkPosition('specification')) : ?>
<ul class="pos-specification">
	<?php echo $this->renderPosition('specification', array('style' => 'list')); ?>
</ul>
<?php endif; ?>

<?php if ($this->checkPosition('links')) : ?>
<div class="pos-links">
	<?php echo $this->renderPosition('links', array('style' => 'pipe')); ?>
</div>
<?php endif; ?>