<?php /* Smarty version 2.6.29, created on 2018-04-26 06:05:04
         compiled from cache/include/InlineEditing/AccountsEditViewwebsite.tpl */ ?>

	<?php if (! empty ( $this->_tpl_vars['fields']['website']['value'] )): ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' size='30' 
	   maxlength='255' value='<?php echo $this->_tpl_vars['fields']['website']['value']; ?>
' title='' tabindex='1'  >
	<?php else: ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' size='30' 
	   maxlength='255'	   	   <?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> 
	    title='' tabindex='1'  >
	<?php endif; ?>