<script type="text/javascript">
$(function(){


$('#w').window({ 
	title:"FORM <?php echo strtoupper($NmMenu) ?>", 
    width:770,
	height:550,	
	top:0,
	left:0,	
	collapsible:false,
	minimizable:false,
	maximizable:false
}); 	
	

$('#wCari').window({ 
	title:"Cari <?php echo $NmMenu ?>", 
    width:600,
	height:365,
	closed:true,
	modal:true, 
	collapsible:false,
	minimizable:false,
	maximizable:false
}); 
			  
$('#btnTbh').click(function(){	 	
	dsbtnTbh();
	enbtnSim();	
	enbtnBtl();		
	enInput();
	setdg();
	setdg2();
	$('#KdBarang').attr("disabled",true);
});
 
$('#btnUbh').click(function(){
	enbtnSim();			
	dsbtnHps();
	
	enInput();	
	enTgl();
	$('#ref_id').combogrid({disabled:false});
	$('#KdBarang').attr("disabled",true);
});
  
$('#btnSim').click(function(){
	btnSim();
});

$('#btnBtl').click(function(){
	location.reload(true);
});

$('#btnHps').click(function () {
	if ($('#fhidden').val() != '') {
		$.messager.confirm('Confirm','Are you sure you want to delete record?',function(r){  
			if (r){ 
				$.post("<?php echo $basedir ?>models/hps_bc.php", { 
				CAR: $('#fhidden').val(),
				DokKdBc: 9
				},function(data){
					$.messager.alert('Warning',data); 
					location.reload(true);
				});
			}
		}); 	
	} else {
		$.messager.alert('Warning','Silahkan pilih data yang akan di hapus!');
	}
});

$('#tl2Tbh').click(function(){
	$('#tl2Sim').show();
	$('#tl2Ubh2').hide();
	tl2Tbh();
});

$('#tl2Ubh').click(function(){
	$('#tl2Sim').hide();
	$('#tl2Ubh2').show();
	tl2Ubh();
});

$('#tl2Ubh2').click(function(){
	tl2Ubh2();
	$('#dlgBarang').dialog('close');
});

$('#tl2Hps').click(function(){
	tl2Hps();
});

$('#tl2Sim').click(function(){
	tl2Sim();
	$('#dlgBarang').dialog('close');
});

$('#btnCri').click(function(){
	$('#wCari').window('open');
	setdgCari();
});

$('#NmTuj').change(function(){	
	$('#ref_id').combogrid({
		url: '<?php echo $basedir ?>models/bc41/bc41_grid.php?req=outhdr&NmTuj='+$('#NmTuj').val(),  
		disabled:false
	});	
});
	

$('#KdBarang').change(function(){
	setUrBarang("KdBarang","UrBarang");
});

$('.easyui-numberbox').css('text-align', 'right');
$('#CAR').mask("999.999");
$('#NoDaf').mask("999.999");
dsInput();
$('#dtdari').datebox({disabled:false});
$('#dtsampai').datebox({disabled:false});
	
	$('#ref_id').combogrid({  
		panelWidth:500,  
		width:150,	
		idField:'matout_id',  
		textField:'matout_no',  
		url: '<?php echo $basedir ?>models/bc41/bc41_grid.php?req=outhdr',  
		mode:'remote',  
		rownumbers:true,
		fitColumns:true,
		pagination:true,
		pageList:[25,50,75,100],   
		columns:[[  
			{field:'matout_no',title:'Outgoing No.',width:60},
			{field:'matout_date',title:'Outgoing Date',width:50},
			{field:'cust',title:'Customer',width:50}
		]],
		onClickRow:function(index,row){setdg2Url(row)}  
	});

    
});//Akhir Document Ready
</script>