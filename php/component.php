<?php
	


function inputElement ($icon, $placeholder, $name, $value, $styleclass) {
	// Dentro de [""] posso usa [\"] ou ['] 
	$element = "

		<div class=\"input-group mb-2\">

        	<div class=\"input-group-prepend\">
         		<div class=\"input-group-text $styleclass\">$icon</div>
    		</div>	

        	<input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" autocomplete=\"off\" placeholder=\"$placeholder\" name=\"$name\" value=\"$value\">

      	</div>

	";

	echo $element;
}

function buttonElement ($btnid, $styleclass, $text, $name, $attr) {
	// Dentro de [""] posso usa [\"] ou ['] 
	$btn = "
		<button name='$name' '$attr' class='$styleclass' id='$btnid' >$text</button>
	";

	echo $btn;
}

