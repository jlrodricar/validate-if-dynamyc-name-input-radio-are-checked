$(document).ready(function() {
  $("#loadPreguntasForm").validate({
		submitHandler : function(form) {

			//MAKE THE RADIO BUTTONS  MANDATORY
			var finalQuestiosnQty = [];
			$(".control-question-load").each(function(index) {
				var radioName = $(this).find('input:radio').attr('name');
				finalQuestiosnQty.push(radioName);
			});
			var cantidadFinalElems = finalQuestiosnQty.length;
			var ischecked = [];
			var inputRadio;
			for(inputRadio of finalQuestiosnQty){
				if($('input:radio[name='+inputRadio+']').is(':checked')){
					//NOTHING
				}else{
					ischecked.push(inputRadio);
				}
			}
			var elemRed;
			for(elemRed of ischecked){
				var targetRadio =  $('input:radio[name='+elemRed+']');
				targetRadio.parent().parent().addClass("error_sel_simple");
				scrollToAnchor(targetRadio);
			}
		}
	});
});
