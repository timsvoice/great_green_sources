<?php /* Smarty version Smarty-3.0.4, created on 2013-11-17 18:21:11
         compiled from "/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/input/listbox-multiple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997488074528979973c17d5-98889210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e2763176803d9328e9bfcff8d7c56135771b6c' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/input/listbox-multiple.tpl',
      1 => 1381175632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997488074528979973c17d5-98889210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
[]"
	multiple="multiple"
	onselect="MODx.fireResourceFormChange();"
	onchange="MODx.fireResourceFormChange();"
	size="8"
    style="width: 97%;"
>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('opts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['value']) ? $_smarty_tpl->tpl_vars['item']->value['value'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['selected']) ? $_smarty_tpl->tpl_vars['item']->value['selected'] : null)){?> selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['item']->value['text']) ? $_smarty_tpl->tpl_vars['item']->value['text'] : null);?>
</option>
<?php }} ?>
</select>



<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = new Ext.ux.form.SuperBoxSelect({
    
        xtype:'superboxselect'
        ,transform: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,id: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,triggerAction: 'all'
        ,mode: 'local'
        ,extraItemCls: 'x-tag'
        ,width: 400
        ,displayField: "text"
        ,valueField: "value"
        ,resizable: true
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>

        <?php if ((isset($_smarty_tpl->getVariable('params')->value['title']) ? $_smarty_tpl->getVariable('params')->value['title'] : null)){?>,title: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['title']) ? $_smarty_tpl->getVariable('params')->value['title'] : null);?>
'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['listWidth']) ? $_smarty_tpl->getVariable('params')->value['listWidth'] : null)){?>,listWidth: <?php echo (isset($_smarty_tpl->getVariable('params')->value['listWidth']) ? $_smarty_tpl->getVariable('params')->value['listWidth'] : null);?>
<?php }?>
        ,maxHeight: <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxHeight']) ? $_smarty_tpl->getVariable('params')->value['maxHeight'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('params')->value['maxHeight']) ? $_smarty_tpl->getVariable('params')->value['maxHeight'] : null);?>
<?php }else{ ?>300<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['typeAhead']) ? $_smarty_tpl->getVariable('params')->value['typeAhead'] : null)){?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ((isset($_smarty_tpl->getVariable('params')->value['typeAheadDelay']) ? $_smarty_tpl->getVariable('params')->value['typeAheadDelay'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['typeAheadDelay']) ? $_smarty_tpl->getVariable('params')->value['typeAheadDelay'] : null)!=''){?><?php echo (isset($_smarty_tpl->getVariable('params')->value['typeAheadDelay']) ? $_smarty_tpl->getVariable('params')->value['typeAheadDelay'] : null);?>
<?php }else{ ?>250<?php }?>
            ,editable: true
        <?php }else{ ?>
            ,typeAhead: false
        <?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['listEmptyText']) ? $_smarty_tpl->getVariable('params')->value['listEmptyText'] : null)){?>
            ,listEmptyText: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['listEmptyText']) ? $_smarty_tpl->getVariable('params')->value['listEmptyText'] : null);?>
'
        <?php }?>
        ,forceSelection: true
        ,stackItems: <?php if ((isset($_smarty_tpl->getVariable('params')->value['stackItems']) ? $_smarty_tpl->getVariable('params')->value['stackItems'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['stackItems']) ? $_smarty_tpl->getVariable('params')->value['stackItems'] : null)!='false'){?>true<?php }else{ ?>false<?php }?>
        ,msgTarget: 'under'

        
        ,listeners: {
            'select': {fn:MODx.fireResourceFormChange, scope:this}
            ,'beforeadditem': {fn:MODx.fireResourceFormChange, scope:this}
            ,'newitem': {fn:function(bs,v,f) {
                bs.addNewItem({"id": v,"text": v});
                MODx.fireResourceFormChange();
                return true;
            },scope:this}
            ,'beforeremoveitem': {fn:MODx.fireResourceFormChange, scope:this}
            ,'clear': {fn:MODx.fireResourceFormChange, scope:this}
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
</script>
