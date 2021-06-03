$(document).ready(function () {
    /** The following code handles he filters functionality on the find studnets page.
     * The code uses jQuery to get values of filters and send them to the php file.
     * The php file queries the database to get filtered results.
     */
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
    /**Filters functionality ends hete */

    /**Logic for friend reuests goes next, we don't want to reload the entire page once request action is made.
     * Only relevant elements of the page should be udated.
     */
    $(".requestButton").on('click', '.actionRequest', function () {
        var email = $(this).attr('id');
        var name = $(this).attr("name");
        var action = "data";
        console.log(email, name, action);
        $.ajax({
            type: "POST",
            url: "/controller/requests_friend.php",
            data: { name: name, email: email, action: action },
            success: function (response) {
                $(".requestButton:has([id='" + email + "'])").html(response);
            }
        });
    });

});