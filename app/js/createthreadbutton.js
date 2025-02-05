const buttons = document.querySelectorAll('.option');
const threadPost = document.querySelector('.thread-post');

// Create or update a hidden input for postType
const hiddenPostTypeInput = document.createElement('input');
hiddenPostTypeInput.type = 'hidden';
hiddenPostTypeInput.name = 'postType';
threadPost.appendChild(hiddenPostTypeInput);

buttons.forEach(button => {
    button.addEventListener('click', () => {
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // Get the type and set the hidden input value
        const type = button.getAttribute('data-type');
        hiddenPostTypeInput.value = type;

        threadPost.innerHTML = generateContent(type);
        threadPost.appendChild(hiddenPostTypeInput);
    });
});

function generateContent(type) {
    if (type === 'text') {
        return `
            <textarea name="createPost" id="createPost" placeholder="Body" required></textarea>
            <button type="submit" class="highlight">Post</button>
        `;
    } else if (type === 'image') {
        return `
            <input type="file" name="createPost" accept="image/*,video/*" required />
            <button type="submit" class="highlight">Post</button>
        `;
    } else if (type === 'link') {
        return `
            <input type="url" name="createPost" placeholder="Link URL" required />
            <button type="submit" class="highlight">Post</button>
        `;
    }
}
