//console.log("hello world");

const publisherAvailability = document.getElementById('preacher_publisher_program');
const caseNuoveAvailability = document.getElementById('preacher_caseNuove_program');
// const nextMonthProgram = document.getElementById('preacher_nextMonth_program');
const showPublisherBtn = document.getElementById('showPublisherBtn');
const showCaseNuoveBtn = document.getElementById('showCaseNuoveBtn');
const showNextMonthBtn = document.getElementById('showNextMonthBtn');

function showAvailability(programToShow, firstProgramToHide) {
    programToShow.style.display = 'flex';
    firstProgramToHide.style.display = 'none';
    // secondProgramToHide.style.display = 'none';
}

showPublisherBtn.addEventListener('click', () => {
    showAvailability(publisherAvailability, caseNuoveAvailability);
});

showCaseNuoveBtn.addEventListener('click', () => {
    showAvailability(caseNuoveAvailability, publisherAvailability);
});

// showNextMonthBtn.addEventListener('click', () => {
//     showAvailability(nextMonthProgram, publisherAvailability, caseNuoveAvailability);
// })