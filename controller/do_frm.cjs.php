<script type="text/javascript">
$(function(){	


$('#w').dialog({ 
	title:"<?php echo strtoupper($NmMenu) ?>", 
    width:750,
	height:475,
	left:0,  
	top:0, 
	collapsible:false,
	minimizable:false,
	maximizable:false,
	toolbar:"#toolbar1"
}); 

/*$('#tot_qty').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.',
});

$('#tot_amount').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.',
});*/

$('#qty_so').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.'
});

$('#qty_bal').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.'
});

$('#qty').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.',
	onChange:function(newValue,oldValue){
		price=$('#price').numberbox('getValue');
		amount = newValue*price;
		$('#amount').numberbox('setValue',amount);
	}
});

$('#price').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.',
	onChange:function(newValue,oldValue){
		qty=$('#qty').numberbox('getValue');
		amount = newValue*qty;
		$('#amount').numberbox('setValue',amount);
	}
});

$('#amount').numberbox({  
    min:0, 
	precision:2, 
	groupSeparator:',',
	decimalSeparator:'.',
});

$('#PartNo').combogrid({  
	panelWidth:500,  	
	url: '<?php echo $basedir; ?>models/material/do_grid.php?req=fg',  
	idField:'PartNo',  
	textField:'PartNo',  
	mode:'remote',  
	fitColumns:true,  
	columns:[[  
		{field:'KdBarang',title:'Part Code',width:50},
		{field:'PartNo',title:'Part No.',width:50},
		{field:'NmBarang',title:'Part Name',width:50},
		{field:'Sat',title:'Unit',width:50}
	]],
	onClickRow:function(index,row){set_sono(row)}  
}); 

set_sono('');
	
setdg();
dsInput();
$('#do_date').combo('disable');
$('#due_date').combo('disable');
$('#pilcari').attr('disabled',false);
$('#txtcari').attr('disabled',false);
$('#toolbar2').hide();
$('#toolCari').hide();
$('#tl1Ubh').hide();
$('#tl1Hps').hide();
$('#tl1Sim').hide();
$('#tl1Btl').hide(); 
$('#btnPrint').hide();

$('#dlg').dialog({ 
	title:"<?php echo strtoupper($NmMenu) ?>", 
    width:400,
	height:300,
	closed:true,
	buttons:"#dlg-buttons"
}); 

$('#wCari').dialog({ 
	title:"Cari <?php echo $NmMenu ?>", 
    width:600,
	height:350,
	closed:true,
	modal:true, 
	collapsible:false,
	minimizable:false,
	maximizable:false,
	toolbar:"#dlgtool"
}); 
 
//START TOOLBAR1 
$('#tl1Tbh').click(function(){
	$('#aksi').val('t');
	$('#do_id').val('<?php echo $newId ?>');
	$('#tl1Tbh').hide();
	$('#tl1Sim').show();
	$('#tl1Btl').show();
	$('#tl1Cri').hide();
	
	$('#toolbar2').show();
	
	enInput();
	$('#do_date').datebox('enable');
	$('#so_no').combogrid('enable');
	$('#due_date').datebox('enable');
	$('#Sat2').attr('disabled',true);
});

$('#tl1Ubh').click(function(){
	$('#aksi').val('u');
	$('#tl1Ubh').hide();
	$('#tl1Sim').show();
	$('#tl1Btl').show();
	$('#tl1Cri').hide();
	
	$('#toolbar2').show();
	
	enInput();
	$('#date').datebox('enable');
	setComboGrid();
	$('#Sat2').attr('disabled',true);
	$('#btnPrint').hide();
});

$('#tl1Sim').click(function(){	
	simpan();	
});

$('#tl1Hps').click(function(){
	$('#aksi').val('h');
	$.messager.confirm('Confirm','Are you sure you want to delete this data?',function(r){  
		if (r){
			$.post("<?php echo $basedir ?>models/material/do_tuh.php", { 
			aksi: $('#aksi').val(), 
			do_id: $('#do_id').val()
			},
			function(result){
				var result = eval('('+result+')');
				if (result.success){
					$('#dg').datagrid('reload');	// reload the user data
					$.messager.alert('Info',result.msg); 
					location.reload(true);		
				} else {
					$.messager.alert('Error',result.msg); 
				}			
			});//Akhir If Post
		}
	});//Akhir If yakin?
});

$('#tl1Cri').click(function(){	
	$('#wCari').dialog('open');
	setdgCari();
});

$('#tl1Btl').click(function(){
	location.reload(true);
});


$('#btnSubmit1').click(function(){
	simpan();
});

$('#btnPrint').click(function(){
	topdf();
});
//END TOOLBAR1

//START TOOLBAR2
$('#tl2Tbh').click(function(){
	$('#tl2Sim').show();
	$('#tl2Ubh2').hide();
	
	$('#dlg').dialog('open').dialog('setTitle','Tambah <?php echo $NmMenu ?>');
	$('#fm2').form('clear');
});

$('#tl2Ubh').click(function(){
	$('#tl2Sim').hide();
	$('#tl2Ubh2').show();
	
	var row = $('#dg').datagrid('getSelected');
	if (row){
		$('#dlg').dialog('open').dialog('setTitle','Ubah <?php echo $NmMenu ?>');
		$('#fm2').form('load',row);
	}
});

$('#tl2Ubh2').click(function(){
	if ($('#qty').numberbox('getValue') > $('#qty_bal').numberbox('getValue')){
		alert("Qty. DO can't higher than Qty. Balance");
	} else {
			$('#dlg').dialog('close');
			var row = $('#dg').datagrid('getSelected');
			if (row){
				var index = $('#dg').datagrid('getRowIndex', row);
				$('#dg').datagrid('updateRow',{
					index: index, 
					row: { 
						KdBarang2: $('#KdBarang2').combogrid('getValue'),
						PartNo: $('#PartNo').val(),	
						NmBarang2: $('#NmBarang2').val(),	
						Sat2: $('#Sat2').val(),
						qty: nformat2($('#qty').numberbox('getValue'),2),
						price: nformat2($('#price').numberbox('getValue'),2),
						amount: nformat2($('#amount').numberbox('getValue'),2)
						}
				});
			}
	}
});

$('#tl2Sim').click(function(){
	if ($('#qty').numberbox('getValue') > $('#qty_bal').numberbox('getValue')){
		alert("Qty. DO can't higher than Qty. Balance");
	} else {
		$('#dlg').dialog('close');
		$('#dg').datagrid('appendRow',{		
			KdBarang2: $('#KdBarang2').combogrid('getValue'),
			PartNo: $('#PartNo').val(),	
			NmBarang2: $('#NmBarang2').val(),	
			Sat2: $('#Sat2').val(),
			qty: nformat2($('#qty').numberbox('getValue'),2),
			price: nformat2($('#price').numberbox('getValue'),2),
			amount: nformat2($('#amount').numberbox('getValue'),2)
		});
	}
});

$('#tl2Hps').click(function(){
	var row = $('#dg').datagrid('getSelected');
	if (row){
		var index = $('#dg').datagrid('getRowIndex', row);
		$('#dg').datagrid('deleteRow', index);
	}
});

$('#btnSubmit2').click(function(){
	tl2Sim();
});

$('#tl2Reset').click(function(){
	$('#fm2').form('clear');
});
//END TOOLBAR2

//START DLGTOOL
$('#dtlCri').click(function(){
	setdgCari();
});
//END DLGTOOL

});//Akhir Document Ready
</script>