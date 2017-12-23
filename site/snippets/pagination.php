<div class="pagination">
  <?php if($pagination->hasNextPage()) : ?>
    <a class="pagination-item older" href="<?= $pagination->nextPageURL() ?>" rel="next" title="Older posts">Older</a>
  <?php else : ?>
    <span class="pagination-item older">Older</span>
  <?php endif ?>
  <?php if($pagination->hasPrevPage()) : ?>
  <a class="pagination-item newer" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="Newer posts">Newer</a>
  <?php else : ?>
  <span class="pagination-item newer">Newer</span>
  <?php endif ?>
</div>