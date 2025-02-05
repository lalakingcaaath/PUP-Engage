document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".vote-button").forEach(button => {
        button.addEventListener("click", function() {
            const threadID = this.getAttribute("data-thread");
            const voteType = this.classList.contains("upvote") ? "upvote" : "downvote";

            fetch("/app/pages/forum/vote.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `threadID=${threadID}&voteType=${voteType}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert("Vote recorded!");
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
});