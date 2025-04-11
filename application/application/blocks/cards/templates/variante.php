<div class="flex flex-wrap mx-[5px] grid-view md:mx-[10px] lg:mx-[10px] xl:mx-[15px] !mt-[-40px] xl:!mt-0 lg:!mt-0">
    <?php foreach ($this->controller->get('items') as $key => $item) : ?>
        <?php $this->inc('templates/elements/view/' . $item['type'] . '.php', ['item' => $item, 'index' => $key]); ?>
    <?php endforeach; ?>
</div>