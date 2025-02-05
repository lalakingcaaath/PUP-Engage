function editAboutContent() {
  // Get the elements
  const aboutContent = document.getElementById('aboutContent');
  const editSection = document.getElementById('editSection');
  const editButton = document.getElementById('editButton');
  const aboutTextArea = document.getElementById('aboutTextArea');

  // Pre-fill the textarea with the current content
  aboutTextArea.value = aboutContent.querySelector('p').innerText;

  // Hide the current content and show the edit section
  aboutContent.style.display = 'none';
  editSection.style.display = 'block';
  editButton.style.display = 'none'; // Hide the edit button
}

function updateAboutContent() {
  // Get the elements
  const aboutContent = document.getElementById('aboutContent');
  const editSection = document.getElementById('editSection');
  const editButton = document.getElementById('editButton');
  const aboutTextArea = document.getElementById('aboutTextArea');

  // Update the content with the new value from the textarea
  aboutContent.innerHTML = `<p>${aboutTextArea.value}</p>`;

  // Show the updated content and hide the edit section
  aboutContent.style.display = 'block';
  editSection.style.display = 'none';
  editButton.style.display = 'inline-block'; // Show the edit button again
}
