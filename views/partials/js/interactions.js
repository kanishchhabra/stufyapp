$(document).ready(function () {

    $('.students_check').click(function () {
        var action = "data";
        var university = get_filter_text('university');
        var study_year = get_filter_text('study_year');
        var discipline = get_filter_text('discipline');
        var qualification = get_filter_text('qualification');

        $.ajax({
            type: "POST",
            url: "/controller/view_students.php",
            data: { action: action, university: university, study_year: study_year, discipline: discipline, qualification: qualification },
            success: function (response) {
                $('#studentsList').html(response);
                console.log(action, university, study_year, qualification, discipline);
            }
        });
    });

    function get_filter_text(filter_id) {
        var filterData = [];
        $('#' + filter_id + ':checked').each(function () {
            filterData.push($(this).val());
        });
        return filterData;
    };
    $('#filterButton').click(function () {
        $("#studentsFilters").slideToggle();
    });
    $('#filterHide').click(function () {
        $("#studentsFilters").slideUp();
    });
});