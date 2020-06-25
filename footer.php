<!-- <footer>
      <small>Copyright &copy; Shinohara. ALL RIGHTS RESERVED.</small>
</footer> -->
  <footer>
    <?php if (get_previous_post()):?>
    <?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
    <?php endif; ?>

    <?php if (get_next_post()):?>
    <?php next_post_link('%link &raquo;', '次の記事へ'); ?>
    <?php endif; ?>
  </footer>

  </div>
  <?php wp_footer(); ?>
</body>
</html>