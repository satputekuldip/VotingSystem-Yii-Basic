$(function () {
    $('#voterRegistration').click(function () {
        $('#modalVoter').modal('show')
            .find('#modalVoterContent')
            .load($(this).attr('value'))
    });
});

$(function () {
    $('#candidateRegistration').click(function () {
        $('#modalCandidate').modal('show')
            .find('#modalCandidateContent')
            .load($(this).attr('value'))
    });
});