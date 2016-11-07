<ul <?php echo $attributesStr;?>>
    <?php foreach ($languages as $key => $language) { ?>
        <?php /** @var $language \Ip\Language */?>
        <?php if (!$language->isVisible()) { continue; }?>
        <?php $activeClass = ($language->isCurrent()) ? ' class="active"' : ''; ?>
        <li <?php echo $activeClass; ?>>
            <a title="<?php echo escAttr($language->getTitle()); ?>" href="<?php echo escAttr($language->getLink()); ?>">
				<img class="flag" src="<?php echo ipThemeUrl(
					'assets/flags/' . $language->getCode() . '.svg'
				); ?>" alt="">
                <?php echo esc($language->getTitle()); ?>
            </a>
        </li>
    <?php } ?>
</ul>
