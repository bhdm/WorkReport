$(document).ready(function(){
    $.datetimepicker.setLocale('ru');
    $('.datetimepicker').datetimepicker({
        i18n:{
            de:{
                months:[
                    'Январь','Февраль','Март','Апрель',
                    'Май','Июнь','Июль','Август',
                    'Сентябрь','Октябрь','Ноябрь','Декабрь'
                ],
                dayOfWeek:[
                    "Пн", "Вт", "Ср", "Чт",
                    "Пт", "Сб", "Вс"
                ]
            }
        },
        timepicker:false,
        format:'d.m.Y'
    });

    $(".table").stupidtable();
});

