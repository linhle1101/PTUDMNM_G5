document.addEventListener("DOMContentLoaded", () => {
  const menuTrigger = document.querySelector(".menu-trigger");
  const dropdownMenu = document.querySelector(".dropdown-menu");

  // Toggle Dropdown Menu
  menuTrigger.addEventListener("click", () => {
    dropdownMenu.classList.toggle("show");
  });

  // Close Dropdown Menu when clicking outside
  document.addEventListener("click", (event) => {
    if (!event.target.closest(".navbar")) {
      dropdownMenu.classList.remove("show");
    }
  });
});