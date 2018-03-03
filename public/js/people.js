$(function(){
	//do an initial sort at load
	sortPeopleByColumn({
		column: default_sort_column
	});

	$('.sortable_column').on('click', function(event){
		sortPeopleByColumn({
			column:event.currentTarget.id
		});
	});
});

/**
 * Sort 
 * @param  {[type]} arg_sort_info [description]
 * @return {[type]}               [description]
 */
function sortPeopleByColumn(arg_sort_info){
	var column = arg_sort_info.column
	people.sort(function(a, b){
		if( a[column] < b[column] ){
			return -1;
		}
		if( a[column] > b[column] ){
			return 1;
		}
		return 0;
	});

	//update the table with the sorted data
	updatePeopleTable();
	return true;
}

/**
 * remove data from container and repopulate
 * @return {[type]} [description]
 */
function updatePeopleTable(){
	//remove current data from table:
	$('#table_container').children(':not(#table_header)').remove();

	//append people array to the data container
	people.forEach(function(obj){
		var row = '<div class="row">'
			+ '<div class="col-sm-4">' + obj.first_name + '</div>'
			+ '<div class="col-sm-4">' + obj.last_name + '</div>'
			+ '<div class="col-sm-4">' + obj.favorite_color + '</div>';
			+ '</div>';

		$('#table_container').append(row);
	});
}