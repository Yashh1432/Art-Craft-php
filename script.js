// script.js
const dashboardLink = document.getElementById("dashboard-link");
const usersLink = document.getElementById("users-link");
const settingsLink = document.getElementById("settings-link");
const dashboardSection = document.getElementById("dashboard");
const usersSection = document.getElementById("users");
const settingsSection = document.getElementById("settings");

dashboardLink.addEventListener("click", () => {
    dashboardSection.style.display = "block";
    usersSection.style.display = "none";
    settingsSection.style.display = "none";
});

usersLink.addEventListener("click", () => {
    dashboardSection.style.display = "none";
    usersSection.style.display = "block";
    settingsSection.style.display = "none";
});

settingsLink.addEventListener("click", () => {
    dashboardSection.style.display = "none";
    usersSection.style.display = "none";
    settingsSection.style.display = "block";
});
