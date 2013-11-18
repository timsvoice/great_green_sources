<?php /* Smarty version Smarty-3.0.4, created on 2013-11-17 18:25:36
         compiled from "/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/properties/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205393165952897aa05c4325-09834660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b40fe408a9275ea2694469094b36a17d3f2b5e' => 
    array (
      0 => '/Applications/mampstack-5.3.17-0/apache2/htdocs/great_green_sources/manager/templates/default/element/tv/renders/properties/richtext.tpl',
      1 => 1381175632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205393165952897aa05c4325-09834660',
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
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'textfield'
        ,fieldLabel: _('width')
        ,name: 'prop_w'
        ,id: 'prop_w<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['w'] || '100%'
        ,listeners: oc
        ,anchor: '100%'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('height')
        ,name: 'prop_h'
        ,id: 'prop_h<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['h'] || '300px'
        ,listeners: oc
        ,anchor: '100%'
    }]
    ,renderTo: 'tv-wprops-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

