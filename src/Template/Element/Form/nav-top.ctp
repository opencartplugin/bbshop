<section class="content-header">
    <h1><?= $title?></h1>
    <ol class="breadcrumb">
    <?php foreach ($links as $link): ?>
        <?php if ($link['method']=='link') {?>
            <li><i class='<?= $link['class']?>'></i>&nbsp;<?= $this->Html->link(__($link['title']), ['action' => $link['action']]) ?></li>
        <?php } else {?>
            <li><i class='<?= $link['class']?>'></i>&nbsp;<?= $this->Form->postLink(__($link['title']),['action' => $link['action'], $link['id']],['confirm' => __($link['confirm'])])?></li>
        <?php } ?>     
    <?php endforeach; ?>
    </ol>
</section>