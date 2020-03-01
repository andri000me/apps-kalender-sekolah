
<script>
$(document).ready(function(){
    idrow = 2;
 $("#addRow").bind('click',function(){
    var rw=document.getElementById("jml").value;
 
     var x=document.getElementById('module').insertRow(idrow);
	var tmpName="";
	var td1=x.insertCell(0); 
	 

  
	 tmpName = 'jawaban_' + (idrow-1);
	td1.innerHTML="<input type='text' id="+tmpName+ "  name="+tmpName + "  style='width:100%' >";
	idrow++;
	document.getElementById("jml").value = idrow-1;
        
       	


   
 });
 
 
 
// Remove row when clicked
	$("#delete").live('click',function(){
		if(idrow>2) { 
	var x=document.getElementById('module').deleteRow(idrow-1); 
	idrow--; 
	document.getElementById("jml").value = idrow-1;
      
	}
	});
   	
     
});


	

</script>


     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                      
            
            
         
            <table id="module" class="list" >
      <thead>
            <tr>
              <td height="29" class="left">Jawaban Soal</td>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="left"><input type="text" name="jawaban_0" style='width:100%'  ></td>
            </tr>
      </tbody>
        </table>
        <input type="text" name="jml"  id="jml"  value='1' readonly>
        <a  class="button" id="addRow">Add </a>&nbsp;&nbsp;<a id="delete" class="button">Remove </a>
      
       
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>