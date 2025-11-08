<!-- 分类按钮 -->
<div class="category-btns">
    <a href="?" class="<?= $category?'':'active' ?>">全部</a>
    <?php foreach($categories as $cat): ?>
        <a href="?category=<?= urlencode($cat) ?>" class="<?= ($category==$cat)?'active':'' ?>"><?= htmlspecialchars($cat) ?></a>
    <?php endforeach; ?>
</div>

<!-- 视频网格 -->
<div class="grid">
<?php foreach($videosToShow as $video): ?>
    <div class="video-item">
        <video preload="metadata" muted loop controls playsinline>
            <source src="<?= htmlspecialchars($video['path']) ?>" type="video/mp4">
            您的浏览器不支持 video 标签。
        </video>
        <div class="video-title"><?= htmlspecialchars($video['title']) ?></div>
    </div>
<?php endforeach; ?>
</div>

<!-- 分页 -->
<div class="pagination">
<?php for($i=1;$i<=$totalPages;$i++): ?>
    <a href="?<?= $category?'category='.urlencode($category).'&':'' ?>page=<?= $i ?>" class="<?= ($i==$page)?'active':'' ?>"><?= $i ?></a>
<?php endfor; ?>
</div>
