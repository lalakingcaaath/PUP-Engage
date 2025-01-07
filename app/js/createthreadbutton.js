const buttons = document.querySelectorAll('.option');
const threadPost = document.querySelector('.thread-post');

// Event listener for buttons
buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active');

        // Change thread-post content based on selected button
        const type = button.getAttribute('data-type');
        threadPost.innerHTML = generateContent(type);
    });
});

// Generate content dynamically based on the selected type
function generateContent(type) {
    if (type === 'text') {
        return `
            <textarea name="createPost" id="createPost" placeholder="Body"></textarea>
            <button type="submit" class="highlight">Post</button>
        `;
    } else if (type === 'image') {
        return `
            <input type="file" accept="image/*,video/*" />
            <button type="submit" class="highlight">Post</button>
        `;
    } else if (type === 'link') {
        return `
            <input type="url" placeholder="Link URL" />
            <button type="submit" class="highlight">Post</button>
        `;
    }
}
