function checkratehourinput(starttime, endtime) {
    if (endtime == '' && starttime == '')
        {
        //do nothing
        $('#create-rate-table-feedback').text('ok time 3');
        $('#create-rate-submit').prop('disabled', false);
        checkduration(starttime,endtime);
        }
        //check if there is a valid formatted end time
    else if (endtime.match('^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?$'))
        {
        //if yes, check the start time
            if (starttime == '') {
                // a blank start time is illogical
                $('#create-rate-table-feedback').text('You should also have a start time.');
                $('#create-rate-submit').prop('disabled', true);
          
                }
            else if (starttime.match('^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?$'))
            {
                // if start
                if (parseInt(endtime) < parseInt(starttime)) {
                    $('#create-rate-table-feedback').text('Start time must be earlier than end time.');
                    $('#create-rate-submit').prop('disabled', true);
                    }
                else if (parseInt(endtime)==parseInt(starttime))
                    {
                    if ($('#event-end-datepicker').val() == $('#event-start-datepicker').val()) {
                        if (parseInt(endtime.substr(endtime.indexOf(':') + 1)) <= parseInt(starttime.substr(starttime.indexOf(':') + 1))) {
                            $('#create-rate-table-feedback').text('Start time must be earlier than end time.');
                            $('#create-rate-submit').prop('disabled', true);
                        }
                        else {
                            $('#create-rate-table-feedback').text('OK time');
                            $('#create-rate-submit').prop('disabled', false);
                            checkduration(starttime, endtime);
                        }
                    }
                    else
                    {
                        alert('5');
                        $('#create-rate-table-feedback').text('OK time');
                        $('#create-rate-submit').prop('disabled', false);
                        checkduration(starttime, endtime);
                    }
}
                    //otherwise, all is good (its ok for hours to be same as long as end minutes are later))
                else {
                    $('#create-rate-table-feedback').text('OK time');
                    $('#create-rate-submit').prop('disabled', false);
                    checkduration(starttime, endtime);
                    }
            
                }
            else
                {
                //start time format is bad
                $('#create-rate-table-feedback').text('Invalid start time format entered.');
                $('#create-rate-submit').prop('disabled', true);
                }
        }
        //or check if endtime is blank
    else if (endtime == '')
        {
        //if end time is blank, check start time format
        if (starttime.match('^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?$'))
            {
            //if good, do nothing
            $('#create-rate-table-feedback').text('');
            $('#create-rate-submit').prop('disabled', false);
            checkduration(starttime, endtime);
            }
        else
            {
            //otherwise start time format is bad
            $('#create-rate-table-feedback').text('Invalid start time format entered.');
            $('#create-rate-submit').prop('disabled', true);
            }

        }
        //otherwise the end time format is bad
    else
        {
        $('#create-rate-table-feedback').text('Invalid end time format entered.');
        $('#create-rate-submit').prop('disabled', true);
        }

};

function checkdateinput(startdate, enddate) {

    if (startdate == enddate)
    {
        $('#create-rate-table-feedback').text('');
        checkratehourinput($('#event-start-time').val(), $('#event-end-time').val());
    }
    else if (enddate == null) {
        $('#create-rate-table-feedback').text('');
        checkratehourinput($('#event-start-time').val(), $('#event-end-time').val());
    }
    else if (startdate > enddate)
    {
        $('#create-rate-table-feedback').text('End date must be same as or later than start date.');
        $('#event-duration').val('0');
        $('#event-duration-input-label').text('minutes');
    }
    else if (startdate == null) {
        $('#create-rate-table-feedback').text('You need a start date.');
        $('#event-duration').val('0');
        $('#event-duration-input-label').text('minutes');
    }
    else if (startdate < enddate)
    {
        $('#create-rate-table-feedback').text('');
        checkratehourinput($('#event-start-time').val(), $('#event-end-time').val());
    }
    else
    {
        $('#create-rate-table-feedback').text('');
        checkratehourinput($('#event-start-time').val(), $('#event-end-time').val());
    }
}

function checkduration(starttime,endtime){
    if (endtime == '')
    { $('#event-duration').val('0'); 
    $('#event-duration-input-label').text('minutes');
    
    }
    else
    {
        if ($('#event-end-datepicker').val() == '' && $('#event-start-datepicker').val() == '')
        {
            enddate = new Date('01/01/2000' + ' ' + endtime);
            startdate = new Date('01/01/2000' + ' ' + starttime);
            
        }
        else if ($('#event-end-datepicker').val() == '' && $('#event-start-datepicker').val() != '')
        {
            startdate = new Date($('#event-start-datepicker').val() + ' ' + starttime);
            enddate = new Date($('#event-start-datepicker').val() + ' ' + endtime);
            
        }
        else if ($('#event-end-datepicker').val() != '' && $('#event-start-datepicker').val() == '')
        {
            startdate = new Date($('#event-end-datepicker').val() + ' ' + starttime);
            enddate = new Date($('#event-end-datepicker').val() + ' ' + endtime);
            
        }

        else if ($('#event-end-datepicker').val() != '' && $('#event-start-datepicker').val() != '') {
            startdate = new Date($('#event-start-datepicker').val() + ' ' + starttime);
            enddate = new Date($('#event-end-datepicker').val() + ' ' + endtime);
            
        }
        
        _duration = ((enddate - startdate) / 1000 / 60);
       

        //var _durationhrs = (parseInt(endtime.substr(0, endtime.indexOf(':')), 10) - parseInt(starttime.substr(0, starttime.indexOf(':')), 10)) * 60;
        //var _durationmin = (parseInt(endtime.substr(endtime.indexOf(':')+1, endtime.length-1), 10) - parseInt(starttime.substr(starttime.indexOf(':')+1, starttime.length-1), 10)) ;
    
        if (_duration>119)
        {
            $('#event-duration').val(Math.round(_duration/ 60*100)/100);
            $('#event-duration-input-label').text('hours');

        }
        else
        {
            $('#event-duration').val(_duration);
            $('#event-duration-input-label').text('minutes');

        }
        
    }


}

function updateinterval(selectedRadio) {
    switch (selectedRadio.value) {
        case '1':
            $('#recurrence-input-interval-label').text('day');
            break;

        case '2':
            $('#recurrence-input-interval-label').text('week');
            break;

        case '3':
            $('#recurrence-input-interval-label').text('month');
            break;

        case '4':
            $('#recurrence-input-interval-label').text('year');
            break;

        default:
            break;
    }
}



function updateperiods(selectedRadio) {
    switch (selectedRadio.value) {
        case '1':
            document.getElementById('create-rate-minimum-input-label').innerHTML = '1/4 hours';
            break;

        case '2':
            document.getElementById('create-rate-minimum-input-label').innerHTML = '1/2 hours';
            break;

        case '3':
            document.getElementById('create-rate-minimum-input-label').innerHTML = 'hours';
            break;

        case '4':
            document.getElementById('create-rate-minimum-input-label').innerHTML = 'days';
            break;

        case '5':
            document.getElementById('create-rate-minimum-input-label').innerHTML = 'weeks';
            break;

        default:
            document.getElementById('create-rate-minimum-input-label').innerHTML = 'hour';
            break;
    }
}


function updateinstances(spinnerValue)
{
    if (spinnerValue > 1) {
        $('#event-end-datepicker').datepicker('option', 'disabled', true);
        $('#event-end-datepicker').val('');
        checkratehourinput($('#event-start-time').val(), $('#event-end-time').val());
    }
    else {
        $('#event-end-datepicker').datepicker('option', 'disabled', false);
    }
}


function updatefrequency(spinnerValue) {
   

    switch (spinnerValue.toString().substring(spinnerValue.toString().length, 1)) {
        case '':
            switch (spinnerValue.toString().substring(spinnerValue.toString().length-1, 1)) { 
                case '1':
                $('#recurrence-input-interval-counter').text('st');
                break;

                case '2':
                $('#recurrence-input-interval-counter').text('nd');
                break;

                case '3':
                $('#recurrence-input-interval-counter').text('rd');
                break;

                default:
                $('#recurrence-input-interval-counter').text('th');
                break;
            }
            break;

        case '0':
            $('#recurrence-input-interval-counter').text('th');
            break;

        case '1':
            $('#recurrence-input-interval-counter').text('st');
            break;

        case '2':
            $('#recurrence-input-interval-counter').text('nd');
            break;

        case '3':
            $('#recurrence-input-interval-counter').text('rd');
            break;

        default:
            $('#recurrence-input-interval-counter').text('th');
            break;
    }
}





$('#create-rate-end-mondays').change(function () { checkratehourinput($('#create-rate-start-mondays').val(), $(this).val()) });
$('#create-rate-end-tuesdays').change(function () { checkratehourinput($('#create-rate-start-tuesdays').val(), $(this).val()) });
$('#create-rate-end-wednesdays').change(function () { checkratehourinput($('#create-rate-start-wednesdays').val(), $(this).val()) });
$('#create-rate-end-thursdays').change(function () { checkratehourinput($('#create-rate-start-thursdays').val(), $(this).val()) });
$('#create-rate-end-fridays').change(function () { checkratehourinput($('#create-rate-start-fridays').val(), $(this).val()) });
$('#create-rate-end-saturdays').change(function () { checkratehourinput($('#create-rate-start-saturdays').val(), $(this).val()) });
$('#create-rate-end-sundays').change(function () { checkratehourinput($('#create-rate-start-sundays').val(), $(this).val()) });
$('#create-rate-start-mondays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-mondays').val()) });
$('#create-rate-start-tuesdays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-tuesdays').val()) });
$('#create-rate-start-wednesdays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-wednesdays').val()) });
$('#create-rate-start-thursdays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-thursdays').val()) });
$('#create-rate-start-fridays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-fridays').val()) });
$('#create-rate-start-saturdays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-saturdays').val()) });
$('#create-rate-start-sundays').change(function () { checkratehourinput($(this).val(), $('#create-rate-end-sundays').val()) });

// recurrence spinner
$( "#recurrence-frequencey-spinner" ).spinner();
$( "#recurrence-frequencey-spinner" ).spinner('option', 'min', 1);
$( "#recurrence-frequencey-spinner" ).spinner('option', 'max', 365);
$("#recurrence-frequencey-spinner").spinner('option', 'width', 4);
$("#recurrence-frequencey-spinner").spinner('value', 1);
$("#recurrence-frequencey-spinner").spinner({ stop: function (event, ui) { updatefrequency($("#recurrence-frequencey-spinner").spinner('value')); } });

//instances spinner
$("#recurrence-instances-spinner").spinner();
$("#recurrence-instances-spinner").spinner('option', 'min', 1);
$("#recurrence-instances-spinner").spinner('option', 'max', 20);
$("#recurrence-instances-spinner").spinner('option', 'width', 4);
$("#recurrence-instances-spinner").spinner('value', 1);
$("#recurrence-instances-spinner").spinner({ stop: function (event, ui) { updateinstances($("#recurrence-instances-spinner").spinner('value')); } });



// date picker
$('#event-start-datepicker').datepicker();
$('#event-start-datepicker').datepicker({ showOn: 'both' });
$('#event-end-datepicker').datepicker();
$('#event-end-datepicker').datepicker({ showOn: 'both' });

$('#event-start-datepicker').on('change',function () { checkdateinput($('#event-start-datepicker').datepicker('getDate'), $('#event-end-datepicker').datepicker('getDate')) });
$('#event-end-datepicker').on('change',function () { checkdateinput($('#event-start-datepicker').datepicker('getDate'), $('#event-end-datepicker').datepicker('getDate')) });

$('#event-start-time').on('change', function () { checkratehourinput($('#event-start-time').val(), $('#event-end-time').val()) });
$('#event-end-time').on('change', function () { checkratehourinput($('#event-start-time').val(), $('#event-end-time').val()) });

//$('#event-duration').change(function () { checkdurationinput($('#event-duration').val(), $('#event-start-time').val(), $('#event-end-time').val()) });