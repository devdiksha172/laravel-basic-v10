document.addEventListener("DOMContentLoaded", function () {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    document.querySelectorAll(".delete-btn").forEach((button) => {
        button.addEventListener("click", function () {
            let recordId = this.dataset.id;
            let url = this.dataset.route;
            deleteRecord(url, csrfToken);
        });
    });
});
function deleteRecord(url, csrfToken) {
    if (confirm("Are you sure you want to delete this record?")) {
        fetch(url, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === "success") {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    }
}

function previewImage(event, previewId) {
    const file = event.target.files[0];
    const preview = document.getElementById(previewId);
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result; // Set the src to the file's data URL
            preview.style.display = "block"; // Show the preview image
        };

        reader.readAsDataURL(file); // Read the file as a data URL
    } else {
        preview.style.display = "none"; // Hide the preview if no file is selected
    }
}
