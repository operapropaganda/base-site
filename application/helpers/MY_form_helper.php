<?php

if( !function_exists('print_select_estados') ){
	
	function print_select_estados($extras = array()){
		
		$estados = array('AC'=>"Acre",
                 'AL'=>"Alagoas",
                 'AP'=>"Amap�",
                 'AM'=>"Amazonas",
                 'BA'=>"Bahia",
                 'CE'=>"Cear�",
                 'DF'=>"Distrito Federal",
                 'ES'=>"Esp�rito Santo",
                 'GO'=>"Goi�s",
                 'MA'=>"Maranh�o",
                 'MT'=>"Mato Grosso",
                 'MS'=>"Mato Grosso do Sul",
                 'MG'=>"Minas Gerais",
                 'PA'=>"Par�",
                 'PB'=>"Para�ba",
                 'PR'=>"Paran�",
                 'PE'=>"Pernambuco",
                 'PI'=>"Piau�",
                 'RJ'=>"Rio de Janeiro",
                 'RN'=>"Rio Grande do Norte",
                 'RS'=>"Rio Grande do Sul",
                 'RO'=>"Rond�nia",
                 'RR'=>"Roraima",
                 'SC'=>"Santa Catarina",
                 'SP'=>"S�o Paulo",
                 'SE'=>"Sergipe",
                 'TO'=>"Tocantins"
                 );
                 
		$select = "<select name='".$extras['name']."' title='".$extras['title']."' id='".$extras['id']."' class='".$extras['class']."'>";
		

	    foreach($estados as $key => $state){
	    	
	     
	    	$select .= "<option value=\"$key\" >$key</option>";
	    	
	    	
	    }


		$select .= "</select>";                  		
		
		return $select;
	}
	
}

if( !function_exists('print_sex_select') ){
	
	function print_sex_select($extras = array()){

		$instance = &get_instance();
			 
		$select = "<select name='".$extras['name']."' title='".$extras['title']."' id='".$extras['id']."' class='".$extras['class']."'>";
		
		$select .= "<option value=\"feminino\">{$instance -> lang -> line('select_sex_option_female')}</option>
                    <option value=\"masculino\">{$instance -> lang -> line('select_sex_option_male')}</option>";

		$select .= "</select>";                  		
		
		return $select;
	}
	
}

if( !function_exists('print_marital_status_select') ){
	
	function print_marital_status_select($extras = array()){

		$instance = &get_instance();
			 
		$select = "<select name='".$extras['name']."' title='".$extras['title']."' id='".$extras['id']."' class='".$extras['class']."'>";
		
		$select .= "<option selected=\"selected\" value=\"solteiro(a)\">{$instance -> lang -> line('select_marital_status_option_single')}</option>
                    <option value=\"casado(a)\">{$instance -> lang -> line('select_marital_status_option_married')}</option>
                    <option value=\"divorciado(a)\">{$instance -> lang -> line('select_marital_status_option_divorced')}</option>
                    <option value=\"viuvo(a)\">{$instance -> lang -> line('select_marital_status_option_widower')}</option>";

		$select .= "</select>";                  		
		
		return $select;
	}
	
}

if( !function_exists('print_children_select') ){
	
	function print_children_select($extras = array()){

		$instance = &get_instance();
			 
		$select = "<select name='".$extras['name']."' title='".$extras['title']."' id='".$extras['id']."' class='".$extras['class']."'>";
		
		$select .= "<option selected=\"selected\" value=\"nenhum\">{$instance -> lang -> line('select_children_option_none_children')}</option>
                    <option value=\"1\">1</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>
                    <option value=\"5\">5</option>
                    <option value=\"mais de 5\">{$instance -> lang -> line('select_children_option_more_than_children')}</option>";

		$select .= "</select>";                  		
		
		return $select;
		
	}
	
}