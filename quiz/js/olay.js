  // dropdown
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownNavbarLink = document.getElementById('dropdownNavbarLink');
    const dropdownNavbar = document.getElementById('dropdownNavbar');
  
    dropdownNavbarLink.addEventListener('click', function() {
      dropdownNavbar.classList.toggle('hidden');
    });

    const dropdownKimyaLink = document.getElementById('dropdownKimyaLink');
    const dropdownKimya = document.getElementById('dropdownKimya');
  
    dropdownKimyaLink.addEventListener('click', function() {
      dropdownKimya.classList.toggle('hidden');
    });
  
    const dropdownDilLink = document.getElementById('dropdownDilLink');
    const dropdownDil = document.getElementById('dropdownDil');
  
    dropdownDilLink.addEventListener('click', function() {
      dropdownDil.classList.toggle('hidden');
    });
  });