<?

final class dias_semana extends field{

	function view(){

		return "Campo de selección múltiple"; //$this->value;
	
	}
	function bake_field (){
		$output = "<select name=\"".$this->fieldname."[]\" id=\"".$this->fieldname."\" MULTIPLE='multiple' size='6' width='100' ".">";
	
		$ids_selected = explode(",",$this->value);
		$output .= '<option value="1" ';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '>Lunes</option>';
		$output .= '<option value="2">Martes</option>';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '<option value="3">Miércoles</option>';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '<option value="4">Jueves</option>';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '<option value="5">Viernes</option>';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '<option value="6" ';
		if (in_array("1",$ids_selected)) $output.= 'selected';
		$output .= '>Sábado</option>';
		$output .= '<option value="7" ';
		if (in_array("7",$ids_selected)) $output.= 'selected';
		$output .= '>Domingo</option>';	
		$output .= "</select><br><small>Mantener SHIFT/CTRL pulsado para selección múltiple </small>";
		//$this->toError("BAKE_MULTICOMBO intenta abrir la tabla ".$tablax2);
		return $output;
				
						
	}
		
	function exec_add () {
		if ($this->value == '') return '';
		return implode(",",$this->value);

	}
	function exec_edit () {
		if ($this->value == '') return '';
		return 	implode(",",$this->value);
	}
	
	


}

