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


<?// no mobil?>
<div class="floatbox row no_mobil" itemscope itemtype="http://schema.org/Product">

		<?php if ($this->checkPosition('title')) : ?>
		<h1 class="pos-title  span12" itemprop="name"><?php echo $this->renderPosition('title'); ?></h1>
		<?php endif; ?>
		
		<div class="row-fluid">
		 
			<!-- блок основного контента -->
			<div class=" span8">
				<?php if ($this->checkPosition('description')) : ?>
				<div class="pos-description">
				<h2> Описание курса</h2>
					<div itemprop="description">
						<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
					</div>
				</div>
				<?php endif; ?>
				<?php if ($this->checkPosition('programm')) : ?>
				<div class="pos-programm">
				<h2> Программа курса</h2>
				<?php echo $this->renderPosition('programm', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			
				<?php if ($this->checkPosition('bottom')) : ?>
				<div class="pos-bottom">
					<?php echo $this->renderPosition('bottom', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
				
				<?php if ($this->checkPosition('related')) : ?>
				<div class="pos-related">
					<?php echo $this->renderPosition('related', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			
			</div>
			

		
			<div class="pos-zapisatsya span4">
				<a href="index.php/zapisatstsya">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ <?/*?><br /> СО СКИДКОЙ 5%<?*/?></a>
			</div>
			<!-- Стоимость (со скидкой и без скидки) -->
			<?php if ($this->checkPosition('prise_sale')) : ?>
				<?php if ($this->checkPosition('prise')) : ?>
				<div class="pos-prise span4 abolished_price">Стоимость:
					<?php echo $this->renderPosition('prise', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			<div class="pos-prise_sale span4" itemscope itemprop="offers" itemtype="http://schema.org/Offer"> Стоимость со скидкой:
				<div itemprop="price">
					<?php echo $this->renderPosition('prise_sale', array('style' => 'block')); ?>
					<meta itemprop="priceCurrency" content="RUB" />
				</div>
			</div>
			<?php else: ?>
				<?php if ($this->checkPosition('prise')) : ?>
				<div class="pos-prise span4" itemscope  itemprop="offers" itemtype="http://schema.org/Offer">Стоимость:
					<div itemprop="price">
						<?php echo $this->renderPosition('prise', array('style' => 'block')); ?>
						<meta itemprop="priceCurrency" content="RUB" />
					</div>
				</div>
				<?php endif; ?>			
			<?php endif; ?>
			
			<!-- добавочьные блоки (1,2,3)-->
			<?php if ($this->checkPosition('additional_block_1')) : ?>
			<div class="additional_block span4">
				<div>
					<?php echo $this->renderPosition('additional_block_1', array('style' => 'block')); ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->checkPosition('additional_block_2')) : ?>
			<div class="additional_block span4">
				<div>
					<?php echo $this->renderPosition('additional_block_2', array('style' => 'block')); ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->checkPosition('additional_block_3')) : ?>
			<div class="additional_block span4">
				<div>
					<?php echo $this->renderPosition('additional_block_3', array('style' => 'block')); ?>
				</div>
			</div>
			<?php endif; ?>
		
			<?php if ($this->checkPosition('sale')) : ?>
			<div class="pos-sale span4"> Скидка:
				<?php echo $this->renderPosition('sale', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>
			
			<?php if (($this->checkPosition('time')) || ($this->checkPosition('date')) || ($this->checkPosition('duration')) || ($this->checkPosition('strength'))): ?>
			<div class="vdpr_block span4">
			
				<?php if ($this->checkPosition('time2'))  : ?>
				<div class="pos-time"> Время начала занятий:
					<?php echo $this->renderPosition('time2', array('style' => 'block')); ?>
				</div>
				<?php else: ?>					
			
					<?php if (($this->checkPosition('time')) and  (!$this->checkPosition('time2'))) : ?>
					<div class="pos-time"> Время начала занятий:
						<?php echo $this->renderPosition('time', array('style' => 'block')); ?>
					</div>
					<?php endif; ?>
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
			
				<?php if ($this->checkPosition('duration')) : ?>
				<div class="pos-duration "> Продолжительность занятий:
					<?php echo $this->renderPosition('duration', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			
				<?php if ($this->checkPosition('strength')) : ?>
				<div class="pos-strength"> Размер группы:
					<?php echo $this->renderPosition('strength', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			
				<?php if ($this->checkPosition('indi-training')) : ?>
				<div class="pos-indi-training"> <!--<h3>Индивидуальное обучение</h3> -->
					<?php echo $this->renderPosition('indi-training', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
			
				<?php if ($this->checkPosition('action')) : ?>
				<div class="pos-action"> <h3>Акция:</h3> 
					<?php echo $this->renderPosition('action', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
				
				<?php if ($this->checkPosition('license')) : ?>
				<div class="pos-license">
					<?php echo $this->renderPosition('license', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
				
			</div>
			<?php endif; ?>	
		</div>
</div>

<?// mobil?>
<div class="floatbox row mobil" itemscope itemtype="http://schema.org/Product">

	<?php if ($this->checkPosition('title')) : ?>
	<h1 class="pos-title  span12" itemprop="name"><?php echo $this->renderPosition('title'); ?></h1>
	<?php endif; ?>
	
	
	<div class="row-fluid">
	 
		
		
		<div class="pos-zapisatsya span3">
			<a href="index.php/zapisatstsya">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ<?/*?> <br /> СО СКИДКОЙ 5%<?*/?></a>
		</div>
		
		<!-- Стоимость (со скидкой и без скидки) -->
		<?php if ($this->checkPosition('prise_sale')) : ?>
			<?php if ($this->checkPosition('prise')) : ?>
			<div class="pos-prise span4 abolished_price">Стоимость:
				<?php echo $this->renderPosition('prise', array('style' => 'block')); ?>
			</div>
		<?php endif; ?>
		<div class="pos-prise_sale span4" itemscope itemprop="offers" itemtype="http://schema.org/Offer"> Стоимость со скидкой:
			<div itemprop="price">
				<?php echo $this->renderPosition('prise_sale', array('style' => 'block')); ?>
				<meta itemprop="priceCurrency" content="RUB" />
			</div>
		</div>			
		<!-- Стоимость без скидки-->
		<?php else: ?>
			<?php if ($this->checkPosition('prise')) : ?>
			<div class="pos-prise span4" itemscope  itemprop="offers" itemtype="http://schema.org/Offer">Стоимость:
				<div itemprop="price">
					<?php echo $this->renderPosition('prise', array('style' => 'block')); ?>
					<meta itemprop="priceCurrency" content="RUB" />
				</div>
			</div>
			<?php endif; ?>			
		<?php endif; ?>
		
		<!-- добавочьные блоки (1,2,3)-->
		<?php if ($this->checkPosition('additional_block_1')) : ?>
		<div class="additional_block span4">
			<div>
				<?php echo $this->renderPosition('additional_block_1', array('style' => 'block')); ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($this->checkPosition('additional_block_2')) : ?>
		<div class="additional_block span4">
			<div>
				<?php echo $this->renderPosition('additional_block_2', array('style' => 'block')); ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($this->checkPosition('additional_block_3')) : ?>
		<div class="additional_block span4">
			<div>
				<?php echo $this->renderPosition('additional_block_3', array('style' => 'block')); ?>
			</div>
		</div>
		<?php endif; ?>
	
		<?php if ($this->checkPosition('sale')) : ?>
		<div class="pos-sale span4"> Скидка:
			<?php echo $this->renderPosition('sale', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>
		
		<?php if (($this->checkPosition('time')) || ($this->checkPosition('date')) || ($this->checkPosition('duration')) || ($this->checkPosition('strength'))): ?>
		<div class="vdpr_block span4">
		
			<?php if ($this->checkPosition('time2'))  : ?>
			<div class="pos-time"> Время начала занятий:
				<?php echo $this->renderPosition('time2', array('style' => 'block')); ?>
			</div>
			<?php else: ?>					
		
				<?php if (($this->checkPosition('time')) and  (!$this->checkPosition('time2'))) : ?>
				<div class="pos-time"> Время начала занятий:
					<?php echo $this->renderPosition('time', array('style' => 'block')); ?>
				</div>
				<?php endif; ?>
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
		
			<?php if ($this->checkPosition('duration')) : ?>
			<div class="pos-duration "> Продолжительность занятий:
				<?php echo $this->renderPosition('duration', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>
		
			<?php if ($this->checkPosition('strength')) : ?>
			<div class="pos-strength"> Размер группы:
				<?php echo $this->renderPosition('strength', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>
		
			<?php if ($this->checkPosition('action')) : ?>
			<div class="pos-action"> <h3>Акция:</h3> 
				<?php echo $this->renderPosition('action', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>

			<!-- блок основного контента (описание курса) -->
			<?php if ($this->checkPosition('description')) : ?>
			<div class="pos-description">
			<h2> Описание курса</h2>
				<div itemprop="description">
					<?php echo $this->renderPosition('description', array('style' => 'block')); ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->checkPosition('programm')) : ?>
			<div class="pos-programm">
			<h2> Программа курса</h2>
			<?php echo $this->renderPosition('programm', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>		
			<?php if ($this->checkPosition('bottom')) : ?>
			<div class="pos-bottom">
				<?php echo $this->renderPosition('bottom', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>	
		
			<?php if ($this->checkPosition('indi-training')) : ?>
			<div class="pos-indi-training"> <!--<h3>Индивидуальное обучение</h3> -->
				<?php echo $this->renderPosition('indi-training', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>
			
			<?php if ($this->checkPosition('license')) : ?>
			<div class="pos-license">
				<?php echo $this->renderPosition('license', array('style' => 'block')); ?>
			</div>
			<?php endif; ?>
			
		</div>
		<?php endif; ?>
		<?php if ($this->checkPosition('related')) : ?>
		<div class="pos-related">
			<?php echo $this->renderPosition('related', array('style' => 'block')); ?>
		</div>
		<?php endif; ?>	
	</div>
</div>
