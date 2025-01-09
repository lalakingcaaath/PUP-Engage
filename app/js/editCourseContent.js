function editCourseContent() {
    // Get the elements
    const courseContent = document.getElementById('courseContent');
    const editCourseSection = document.getElementById('editCourseSection');
    const editAffiliationButton = document.getElementById('editAffiliation');
    const courseTitleInput = document.getElementById('courseTitleInput');
    const courseDescriptionInput = document.getElementById('courseDescriptionInput');
    const courseTitle = document.getElementById('courseTitle');
    const courseDescription = document.getElementById('courseDescription');

    // Pre-fill the input fields with current content
    courseTitleInput.value = courseTitle.innerText;
    courseDescriptionInput.value = courseDescription.innerText;

    // Hide the content and show the edit section
    courseContent.style.display = 'none';
    editCourseSection.style.display = 'block';
    editAffiliationButton.style.display = 'none'; // Hide the edit button
}

function updateCourseContent() {
    // Get the elements
    const courseContent = document.getElementById('courseContent');
    const editCourseSection = document.getElementById('editCourseSection');
    const editAffiliationButton = document.getElementById('editAffiliation');
    const courseTitleInput = document.getElementById('courseTitleInput');
    const courseDescriptionInput = document.getElementById('courseDescriptionInput');
    const courseTitle = document.getElementById('courseTitle');
    const courseDescription = document.getElementById('courseDescription');

    // Update the title and description with new values
    courseTitle.innerText = courseTitleInput.value;
    courseDescription.innerText = courseDescriptionInput.value;

    // Show the updated content and hide the edit section
    courseContent.style.display = 'block';
    editCourseSection.style.display = 'none';
    editAffiliationButton.style.display = 'inline-block'; // Show the edit button again
}
