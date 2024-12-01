<?php
/* Smarty version 3.1.48, created on 2024-12-01 01:02:43
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674ba7a3434641_65371987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00de71589090397295d207f2915f6624faaf939a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1732988028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674ba7a3434641_65371987 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="newsletter-section-wrapper">
  <!-- Tło całej sekcji -->
  <div class="newsletter-section">
    <!-- Niebieski box -->
    <div class="newsletter-content">
      <div class="newsletter-text">
        <h2>Dołącz do naszego klubu.</h2>
        <p>Dołącz do naszego klubu i otrzymuj ciekawe informacje, promocje i rabaty.</p>
      </div>
      <!-- Formularz z poprawnym action -->
      <form class="newsletter-form" action="https://localhost:8080/pl/#blockEmailSubscription_displayFooterBefore" method="post">
        <input type="email" name="email" placeholder="Twój email..." required>
        <button type="submit" class="newsletter-btn">Dodaj</button>
      </form>
    </div>
  </div>

  <!-- Stopka -->
  <footer class="footer-container">
    <div class="footer-links">
      <div class="footer-column">
        <h3>Informacje</h3>
        <ul>
          <li><a href="#">O firmie</a></li>
          <li><a href="#">Regulamin</a></li>
          <li><a href="#">Kontakt</a></li>
          <li><a href="#">Ustawienia cookies</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Social media</h3>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 PG. Wszelkie prawa zastrzeżone.</p>
    </div>
  </footer>
</div>
<?php }
}
