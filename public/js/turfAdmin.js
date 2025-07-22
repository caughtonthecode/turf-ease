// User Profile Dropdown Menu
document.getElementById('profileDropdownBtn').addEventListener('click', function (event) {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('hidden');
    event.stopPropagation();
});

document.addEventListener('click', function (event) {
    var dropdown = document.getElementById('profileDropdown');
    if (!dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});

// Toggle Sidebar Menu
$(document).ready(function () {
    // Toggle sidebar visibility
    $("#toggleButton").click(function () {
        $("#sidebar").toggleClass("collapsed");
    });
});

// Mobile Sidebar Menu
const sidebarToggleBtn = document.getElementById('mobileSidebarToggleBtn');
const sidebar = document.getElementById('mobile-sidebar');
const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
let sidebarOpen = false;

function toggleSidebar() {
    if (sidebarOpen) {
        closeSidebar();
    } else {
        openSidebar();
    }
}

function openSidebar() {
    sidebar.classList.remove('hidden');
    sidebar.classList.add('flex');
    setTimeout(() => {
        sidebar.classList.remove('opacity-0');
        sidebar.firstElementChild.classList.remove('-translate-x-full');
        sidebarOpen = true;
    }, 100);
}

function closeSidebar() {
    sidebar.classList.add('opacity-0');
    sidebar.firstElementChild.classList.add('-translate-x-full');
    setTimeout(() => {
        sidebar.classList.remove('flex');
        sidebar.classList.add('hidden');
        sidebarOpen = false;
    }, 300);
}

sidebarToggleBtn.addEventListener('click', toggleSidebar);
sidebarCloseBtn.addEventListener('click', closeSidebar);
sidebar.addEventListener('click', (event) => {
    if (event.target === sidebar) {
        closeSidebar();
    }
});


// Modal
// Get all update buttons
const updateButtons = document.querySelectorAll('[id^="updateButton-"]');

// Loop through each update button
updateButtons.forEach(button => {
    const turfId = button.id.split('-')[1]; // Extract the turf id from the button id
    const overlay = document.getElementById(`overlay-${turfId}`);
    const modal = document.getElementById(`updateModal-${turfId}`);
    const closeModal = document.getElementById(`closeModal-${turfId}`);

    // Add click event listener to the update button
    button.addEventListener('click', () => {
        overlay.classList.remove('invisible', 'opacity-0');
        overlay.classList.add('visible', 'opacity-100');
        modal.classList.remove('invisible', 'opacity-0');
        modal.classList.add('visible', 'opacity-100');
        modal.querySelector('.bg-white').classList.remove('scale-95');
        modal.querySelector('.bg-white').classList.add('scale-100');
    });

    // Add click event listener to the close button
    closeModal.addEventListener('click', () => {
        overlay.classList.remove('visible', 'opacity-100');
        overlay.classList.add('invisible', 'opacity-0');
        modal.classList.remove('visible', 'opacity-100');
        modal.classList.add('invisible', 'opacity-0');
        modal.querySelector('.bg-white').classList.remove('scale-100');
        modal.querySelector('.bg-white').classList.add('scale-95');
    });
});


// const updateModal = document.getElementById('updateModal');
// const overlay = document.getElementById('overlay');
// const updateButton = document.getElementById('updateButton');
// const closeModal = document.getElementById('closeModal');
// const modalContent = updateModal.querySelector('.bg-white');

// // Open the modal and show the overlay when the "Update" button is clicked
// updateButton.addEventListener('click', () => {
//     updateModal.classList.remove('hidden');
//     overlay.classList.remove('hidden');
//     setTimeout(() => {
//         modalContent.classList.remove('scale-0');
//         overlay.classList.remove('opacity-0');
//     }, 50);
// });

// // Close the modal and hide the overlay when the close icon is clicked or when clicking outside of the modal
// closeModal.addEventListener('click', () => {
//     modalContent.classList.add('scale-0');
//     overlay.classList.add('opacity-0');
//     setTimeout(() => {
//         updateModal.classList.add('hidden');
//         overlay.classList.add('hidden');
//     }, 300);
// });

// window.addEventListener('click', (event) => {
//     if (event.target === overlay) {
//         modalContent.classList.add('scale-0');
//         overlay.classList.add('opacity-0');
//         setTimeout(() => {
//             updateModal.classList.add('hidden');
//             overlay.classList.add('hidden');
//         }, 300);
//     }
// });

// Tabs Day, Evening, Night
const tabLinks = document.querySelectorAll('nav a');
const tabContents = document.querySelectorAll('.tab-content');

// Function to show the active tab content and hide the others
function showTab(event, tabId) {
    event.preventDefault();

    // Remove the active class from all tab links
    tabLinks.forEach(link => link.classList.remove('active', 'bg-gray-100'));

    // Add the active class to the clicked tab link
    event.currentTarget.classList.add('active', 'bg-gray-100');

    // Hide all tab contents
    tabContents.forEach(content => content.classList.add('hidden'));

    // Show the clicked tab content
    document.getElementById(tabId).classList.remove('hidden');
}

// Add click event listeners to the tab links
tabLinks.forEach(link => {
    link.addEventListener('click', (event) => showTab(event, link.getAttribute('href').substring(1)));
});

// Show the "Day" tab content by default
showTab({
    currentTarget: tabLinks[0],
    preventDefault: () => { }
}, 'day');


// Edit Profile Image - Turf Manager Update Profile
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profile-pic').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
