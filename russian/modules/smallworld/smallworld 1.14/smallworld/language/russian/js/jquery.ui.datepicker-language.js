/* English/UK initialisation for the jQuery UI date picker plugin. */
/* Written by Stuart. */
jQuery(function(xoops_smallworld){
	xoops_smallworld.datepicker.regional['ru-RU'] = {
		closeText: 'Закрыть',
		prevText: 'Пред',
		nextText: 'След',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
		'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
		dayNames: ['Воскресение', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
		dayNamesShort: ['Вск', 'Пон', 'Втр', 'Срд', 'Чтв', 'Птн', 'Сбт'],
		dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
		weekHeader: 'Нед',
		dateFormat: 'дд/мм/гг',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	xoops_smallworld.datepicker.setDefaults(xoops_smallworld.datepicker.regional['ru-RU']);
});
