import './bootstrap';

var datetimePicker = flatpickr("#pickdate", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true
});

var datetimePicker1 = flatpickr("#retdate", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true
});

datetimePicker.config.onChange.push(function(selectedDates, dateStr, instance) {
    var dateString = instance.formatDate(selectedDates[0], "Y-m-d H:i");
    console.log(dateString);
});

datetimePicker1.config.onChange.push(function(selectedDates, dateStr, instance) {
    var dateString1 = instance.formatDate(selectedDates[0], "Y-m-d H:i");
    console.log(dateString1);
});

