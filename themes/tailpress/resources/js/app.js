// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      let mobile_logo = document.querySelector('#mobile-logo');
      let social_icons = document.querySelector('#mobile-social-icons');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
            mobile_logo.classList.toggle('hidden');
            social_icons.classList.toggle('hidden');
      });
});
