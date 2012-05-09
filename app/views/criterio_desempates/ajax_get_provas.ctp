<?php
echo '<option value="">Selecione</option>';
foreach($provas as $id => $prova) {
	echo '<option value="' . $id . '">' . $prova . '</option>';
}