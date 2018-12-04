$.get('https://websitepr.eu/banner/tsk/data.json', function (data){
	for (i = 0; i < (data).length; i++) {	
		$('.tableBot table tbody').append( '<tr><td>' +data[i]["Id"]+ '</td><td>' +data[i]["FIrst Name"]+ '</td><td>' +data[i]["FIrst Name"]+ '</td><td>' +data[i]["Last Name"]+ '</td><td>' +data[i]["Email"]+ '</td><td>' +data[i]["Gender"]+ '</td><td>' +data[i]["ip_address"]+ '</td><td>' +data[i]["City"]+ '</td><td>' +data[i]["Avatar"]+ '</td></tr>'  ) 	
	}
	$('table.paginated').each(function() {
		var currentPage = 0;
		var numPerPage = 10;
		var $table = $(this);
		$table.bind('repaginate', function() {
			$table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
		});
		$table.trigger('repaginate');
		var numRows = $table.find('tbody tr').length;
		var numPages = Math.ceil(numRows / numPerPage);
		var $pager = $('<div id="pagination"></div>');
		for (var page = 0; page < numPages; page++) {
			$('<p class="page-number"></p>').text(page + 1).bind('click', {
				newPage: page
				}, function(event) {
				currentPage = event.data['newPage'];
				$table.trigger('repaginate');
				$(this).addClass('active').siblings().removeClass('active');
			}).appendTo($pager).addClass('clickable');
		}
		$pager.insertAfter($table).find('p.page-number:first').addClass('active');
	});
	$('table.paginated').each(function() {
		var currentPage = 0;
		var numPerPage = 10;
		var $table = $(this);
		$table.bind('repaginatea', function() {
			$table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
		});
		$table.trigger('repaginatea');
		var numRows = $table.find('tbody tr').length;
		var numPages = Math.ceil(numRows / numPerPage);
		var $pager = $('<div id="paginationa"></div>');
		for (var page = 0; page < numPages; page++) {
			$('<p class="page-number"></p>').text(page + 1).bind('click', {
				newPage: page
				}, function(eventa) {
				currentPage = eventa.data['newPage'];
				$table.trigger('repaginatea');
				$(this).addClass('active').siblings().removeClass('active');
			}).appendTo($pager).addClass('clickable');
			}
		$pager.insertBefore($table).find('p.page-number:first').addClass('active');
		
	});
	$('#pagination .page-number:nth-child(26n)').each(function() {$(this).before('<br><p></p>')});
})	
