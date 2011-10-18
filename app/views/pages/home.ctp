<script type="text/javascript">
	/*
	 *  jquery.currentpage.js
	 *  Adds a class to current page for navigation links.
	 *  Chad Jolly http://www.jollycomputers.com/
	 */
	jQuery.fn.currentPage = function(){

		/* Default Settings */
		var settings = {
			loc : location.pathname,
			sel : '',
			currentClass : 'current_page_item'
		}

		/* break location down to the controller, no trailing slash */
		if (settings.loc != '/') {
			controller = settings.loc.split('/',2);
			settings.loc = '/'+ controller[1];
			settings.sel = '^';
		}

		var selector = 'a[href'+settings.sel+'="'+settings.loc+'"]';

		/* attach settings.currentClass to appropriate link */
		return this.each(function(){
			if (settings.loc == '/ProcessReports') {
				settings.loc = '/';
				settings.sel = '$';
				jQuery(this).find('a[href'+settings.sel+'="'+settings.loc+'"]').parent().addClass(settings.currentClass);
			} else {
				jQuery(this).find(selector).parent().addClass(settings.currentClass);
			}
		});
	};

	$(document).ready(function() {
		$('#menu').currentPage();
	})
</script>