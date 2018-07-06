                    	<?php
						$cantidadPreguntas = $dataEval[0] -> cantidad_preguntas;

						for ($esz = 1; $esz <= $cantidadPreguntas; $esz++) {
                        $constructQuestion = '<div class="row control-question-load">';
	                    $constructQuestion .= '<span class="identificador_pregunta">'.$esz.'</span>';
						$constructQuestion .= '<span class="class-remove-question pointer" title="Eliminar este elemento"><i class="fas fa-times-circle red"></i></span>';
						$constructQuestion .= '<div class="col-md-12 cdm_form_group">';
							$constructQuestion .= '<div class="col-md-4">';
								$constructQuestion .= '<div class="form-group">';
									$constructQuestion .= '<label for="exampleInputEmail1">Pregunta <var></label>';
									$constructQuestion .= '<textarea class="form-control"  name="pregunta_'.$esz.'" id="pregunta_'.$esz.'" aria-describedby="pregunta_'.$esz.'" rows="8" required></textarea>';
									$constructQuestion .= '<small id="pregunta_'.$esz.'" class="form-text text-muted">Desarrolle una pregunta relacionada al tema.</small>';
								$constructQuestion .= '</div>';
							$constructQuestion .= '</div>';
							$constructQuestion .= '<div class="col-md-4">';
								$constructQuestion .= '<label>Tipo de Pregunta:</label>';
								$constructQuestion .= '<div class="frb-group">';
								$asd = 0;
								foreach($dataTipoPreguntas as $tipo){
									$constructQuestion .= '<div class="frb frb-primary">';
										$constructQuestion .= '<input type="radio" id="radio-button-'.$asd.''.$esz.'" name="radio-button-'.$esz.'" value="'.$tipo->id_tpregunta.'" class="wrequired">';
										$constructQuestion .= '<label for="radio-button-'.$asd.''.$esz.'"> <span class="frb-title">'.$tipo->tipo_nombre.'</span> <span class="frb-description">'.$tipo->caracteristica.'</span> </label>';
									$constructQuestion .= '</div>';
									$asd++;
								}
									
								$constructQuestion .= '</div>';
							$constructQuestion .= '</div>';
							$constructQuestion .= '<div class="col-md-2">';
								$constructQuestion .= '<div class="form-group">';
									$constructQuestion .= '<label for="exampleInputEmail1">Cantidad de Repuestas <var></label>';
									$constructQuestion .= '<input type="number" class="form-control"  name="cantidadRespuestas_'.$esz.'" id="cantidadRespuestas_'.$esz.'" aria-describedby="cantidadRespuestasHelp_'.$esz.'">';
									$constructQuestion .= '<small id="cantidadRespuestasHelp_'.$esz.'" class="form-text text-muted">Indique la cantidad de respuestas que tendrá su pregunta.</small>';
								$constructQuestion .= '</div>';
							$constructQuestion .= '</div>';
							$constructQuestion .= '<div class="col-md-2">';
								$constructQuestion .= '<div class="form-group">';
									$constructQuestion .= '<label for="exampleInputEmail1">Valor porcentual de la pregunta <var></label>';
									$constructQuestion .= '<input type="number" class="form-control"  name="valorPorcentual_'.$esz.'" id="cantidadRespuestas_'.$esz.'" aria-describedby="cantidadRespuestasHelp_'.$esz.'" required>';
									$constructQuestion .= '<small id="cantidadRespuestasHelp_'.$esz.'" class="form-text text-muted">Indique el valor que tendrá esta pregunta respecto a la evaluación final.</small>';
								$constructQuestion .= '</div>';
							$constructQuestion .= '</div>';
						$constructQuestion .= '</div>';
					$constructQuestion .= '</div>';
					
					echo   $constructQuestion;   
						}
                    	?>
