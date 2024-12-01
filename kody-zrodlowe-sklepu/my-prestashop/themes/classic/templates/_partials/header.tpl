<header class="custom-header" id="main-header">
  <div class="header-container">
    <!-- Zdjęcie logo -->
    <div class="header-logo" id="logo-section">
      <a href="https://localhost:8080">
        <img src="{$urls.base_url}themes/classic/assets/img/logo.jpeg" alt="Logo" class="logo-image">
      </a>
    </div>

    <!-- Elementy obok logo -->
    <div class="header-content" id="header-content">
      <!-- Formularz wyszukiwania -->
      <form class="search-box" action="{$urls.pages.search}" method="GET" id="search-box">
        <input 
          type="text" 
          name="s" 
          class="search-input" 
          id="search-input" 
          placeholder="Wpisz, czego szukasz..." 
          required 
        />
        <button type="submit" class="search-btn" id="search-btn">
          <i class="material-icons">search</i>
        </button>
      </form>

      <!-- Moje konto -->
      <div class="header-item" id="account-item">
        <a href="{$urls.pages.my_account}">
          <span>Moje konto</span>
          <i class="material-icons">person</i>
        </a>
      </div>

      <!-- Koszyk -->
      <div class="header-item" id="cart-item">
           {hook h='displayCartModalContent'}    
      </div>

      <!-- Język i waluta -->
      <div class="header-item" id="language-currency-item">
        <a href="#">
          <span>Język i waluta</span>
          <i class="material-icons">flag</i>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Dodaj skrypt na końcu dokumentu -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchBox = document.getElementById('search-box');

    // Zapobiegaj wysłaniu formularza przy kliknięciu w pole input
    searchInput.addEventListener('click', function(event) {
      event.preventDefault();
      // Opcjonalnie: ustaw fokus na polu input, jeśli potrzebujesz
      searchInput.focus();
    });

    // Formularz zostanie wysłany normalnie przy kliknięciu przycisku lub naciśnięciu Enter
  });
</script>
