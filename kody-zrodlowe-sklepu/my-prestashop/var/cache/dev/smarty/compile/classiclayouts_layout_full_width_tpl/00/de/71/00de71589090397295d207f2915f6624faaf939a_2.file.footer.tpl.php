<?php
/* Smarty version 3.1.48, created on 2024-12-01 17:10:02
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674c8a5a866f80_58934169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00de71589090397295d207f2915f6624faaf939a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1733068501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674c8a5a866f80_58934169 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="newsletter-section-wrapper">
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

  </div>

  <!-- Stopka -->
  <footer class="footer-container">
    <div class="footer-links">
      <div class="footer-column">
        <h3>Informacje</h3>
        <ul>
          <li><a href="https://localhost:8080/pl/content/4-o-firmie">O firmie</a></li>
          <li><a href="https://localhost:8080/pl/content/2-regulamin">Regulamin</a></li>
          <li><a href="https://localhost:8080/pl/content/1-kontakt-informacja-ktorych-mozesz-szukac">Kontakt</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Social media</h3>
        <ul>
          <li><a href="https://www.facebook.com/p/fastrygapl-100063697616320/?locale=pl_PL">Facebook</a></li>
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
