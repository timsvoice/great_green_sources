<?php /* Smarty version Smarty-3.0.4, created on 2013-11-17 18:25:41
         compiled from "/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/properties/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96141388952897aa50783f4-20262281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3824f8cc763b26567b853319e5d956635f5972b' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/properties/string.tpl',
      1 => 1381175632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96141388952897aa50783f4-20262281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-wprops-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'select':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'combo' 
        ,fieldLabel: _('string_format')
        ,name: 'prop_format'
        ,hiddenName: 'prop_format'
        ,id: 'prop_format<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,store: new Ext.data.SimpleStore({
            fields: ['v','d']
            ,data: [['',_('none')],['Upper Case',_('upper_case')],['Lower Case',_('lower_case')],['Sentence Case',_('sentence_case')],['Capitalize',_('capitalize')]]
        })
        ,displayField: 'd'
        ,valueField: 'v'
        ,mode: 'local'
        ,editable: false
        ,forceSelection: true
        ,typeAhead: false
        ,triggerAction: 'all'
        ,value: params['format'] || ''
        ,listeners: oc
        ,anchor: '100%'
    }]
    ,renderTo: 'tv-wprops-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

