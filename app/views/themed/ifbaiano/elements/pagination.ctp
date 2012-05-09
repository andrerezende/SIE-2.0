<div class="pagination pagination-centered">
	<ul>
		<?php
		echo $this->MyPaginator->prev('&larr; anterior', array('escape' => false, 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'escape' => false));
		echo $this->MyPaginator->numbers(array('separator' => '', 'current' => 'active', 'tag' => 'li'));
		echo $this->MyPaginator->next('próximo &rarr;', array('escape' => false, 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'escape' => false));
		?>
	</ul>
</div>
